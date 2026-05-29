<?php

namespace App\Support\Build;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BuildStatus
{
    public function __construct(private WikiParser $parser) {}

    public function report(): array
    {
        $cfg = config('build');
        $warnings = [];

        $skeleton = $this->parser->read($cfg['sources']['skeleton']);
        $concernsMd = $this->parser->read($cfg['sources']['concerns']);
        $structureMd = $this->parser->read($cfg['sources']['structure']);

        $pages = $this->parsePages($skeleton, $cfg, $warnings);
        $patterns = $this->parsePatterns($skeleton, $warnings);
        $concerns = $this->parseConcerns($concernsMd, $warnings);

        $checker = new DriftChecker($cfg['stub_line_threshold'], $cfg['stub_markers']);
        $driftInput = array_map(fn ($p) => [
            'id' => $p['id'], 'slug' => $p['slug'], 'stages' => $p['stages'],
            'briefPath' => $p['briefPath'], 'viewPath' => $p['viewPath'],
        ], $pages);
        $driftPatterns = array_map(fn ($p) => ['id' => $p['id'], 'partialPath' => $p['partialPath']], $patterns);
        $drift = $checker->check($driftInput, $driftPatterns);

        $byId = [];
        foreach ($drift as $d) {
            $byId[$d['id']][] = $d['message'];
        }
        foreach ($pages as &$p) {
            $p['drift'] = $byId[$p['id']] ?? [];
        }
        unset($p);
        foreach ($patterns as &$pat) {
            $pat['drift'] = $byId[$pat['id']] ?? [];
        }
        unset($pat);

        Carbon::setLocale('nl');

        return [
            'generatedAt' => Carbon::now()->format('d-m-Y H:i'),
            'warnings' => $warnings,
            'overview' => $this->overview($pages, $patterns, $concerns),
            'drift' => $drift,
            'sitemap' => $this->parser->extractFencedBlock($structureMd, 'Sitemap'),
            'pages' => $pages,
            'patterns' => $patterns,
            'concerns' => $concerns,
            'idMap' => $this->buildIdMap($pages, $patterns, $concerns),
            'sources' => $this->freshness($cfg),
            'structureStale' => $this->structureStaleness($cfg, $pages),
        ];
    }

    /**
     * Last-modified date + relative age per parsed wiki source. Informational —
     * lets the reader see at a glance which source is the oldest (most drift-prone).
     */
    private function freshness(array $cfg): array
    {
        $out = [];
        foreach (['structure', 'skeleton', 'concerns'] as $key) {
            $full = base_path($cfg['sources'][$key]);
            if (! file_exists($full)) {
                continue;
            }
            $when = Carbon::createFromTimestamp(filemtime($full));
            $out[$key] = [
                'file' => basename($cfg['sources'][$key]),
                'date' => $when->translatedFormat('j M Y'),
                'ago' => $when->diffForHumans(),
            ];
        }

        return $out;
    }

    /**
     * Soft staleness hint: if any page's brief/view was edited AFTER 30-structure.md,
     * the sitemap's hand-written description of that page may be behind reality.
     * Returns the newest divergent page, or null when the structure doc is current.
     */
    private function structureStaleness(array $cfg, array $pages): ?array
    {
        $structFull = base_path($cfg['sources']['structure']);
        if (! file_exists($structFull)) {
            return null;
        }
        $structTs = filemtime($structFull);
        $newest = null;
        $newestTs = $structTs;

        foreach ($pages as $p) {
            foreach ([$p['briefPath'], $p['viewPath']] as $rel) {
                if (! $rel) {
                    continue;
                }
                $full = base_path($rel);
                if (file_exists($full) && filemtime($full) > $newestTs) {
                    $newestTs = filemtime($full);
                    $newest = $p;
                }
            }
        }

        if ($newest === null) {
            return null;
        }

        return [
            'pageId' => $newest['id'],
            'page' => "{$newest['id']} {$newest['name']}",
            'pageDate' => Carbon::createFromTimestamp($newestTs)->translatedFormat('j M'),
            'structureDate' => Carbon::createFromTimestamp($structTs)->translatedFormat('j M'),
        ];
    }

    private function parsePages(string $md, array $cfg, array &$warnings): array
    {
        $rows = $this->parser->extractRows($md, '/^P-\d+$/');
        if ($rows === []) {
            $warnings[] = 'Geen page-registry rijen gevonden in 40-skeleton.md.';
        }
        $pages = [];
        foreach ($rows as $c) {
            if (count($c) < 12) {
                continue;
            }
            // Columns: 0 ID · 1 Name · 2 Slug · 3 Type · 4 UX · 5 Conf · 6 Wire
            //          · 7 Assets · 8 UI · 9 Back · 10 OK · 11 Top gaps
            $id = $c[0];
            $slug = trim($c[2], '` ');
            $seg = $this->briefSegment($id, $slug);
            $pages[] = [
                'id' => $id,
                'name' => trim(str_replace('**', '', $c[1])),
                'slug' => $slug,
                'type' => $c[3],
                'stages' => [
                    'ux' => Stage::fromEmoji($c[4]),
                    'wireframe' => Stage::fromEmoji($c[6]),
                    'assets' => Stage::fromEmoji($c[7]),
                    'ui' => Stage::fromEmoji($c[8]),
                    'back' => Stage::fromEmoji($c[9]),
                    'ok' => Stage::fromEmoji($c[10]),
                ],
                'confidence' => (int) (Str::match('/\d/', $c[5]) ?: 0),
                'gaps' => $c[11],
                'briefPath' => "{$cfg['briefs_dir']}/{$seg}.md",
                'viewPath' => $cfg['slug_views'][trim($slug, '/') ?: '/'] ?? null,
                'drift' => [],
            ];
        }

        return $pages;
    }

    private function briefSegment(string $id, string $slug): string
    {
        $nn = str_pad(Str::after($id, 'P-'), 2, '0', STR_PAD_LEFT);
        $last = Str::of($slug)->trim('/')->afterLast('/')->toString();
        $last = $last === '' ? 'home' : $last;
        $last = str_replace('{editie}', 'editie', $last);
        $overrides = [
            'P-02' => '02-dansateliers-performances',
            'P-06' => '06-mariage-editie',
            'P-13' => '13-over-leon',
            'P-19' => '19-atelier-detail',
        ];

        return $overrides[$id] ?? "{$nn}-{$last}";
    }

    private function parsePatterns(string $md, array &$warnings): array
    {
        $rows = $this->parser->extractRows($md, '/^SP-\d+$/');
        if ($rows === []) {
            $warnings[] = 'Geen patterns-library rijen gevonden in 40-skeleton.md.';
        }
        $patterns = [];
        foreach ($rows as $c) {
            if (count($c) < 5) {
                continue;
            }
            $notes = $c[4];
            $patterns[] = [
                'id' => $c[0],
                'name' => trim(str_replace('**', '', $c[1])),
                'usedOn' => $c[2],
                'status' => $c[3],
                'notes' => $notes,
                'partialPath' => $this->partialPath($notes),
                'drift' => [],
            ];
        }

        return $patterns;
    }

    private function partialPath(string $notes): ?string
    {
        if (preg_match('/`?(resources\/views\/partials\/[a-z0-9\-]+\.blade\.php)`?/', $notes, $m)) {
            return $m[1];
        }
        if (preg_match('/`([a-z0-9\-]+\.blade\.php)`/', $notes, $m)) {
            return "resources/views/partials/{$m[1]}";
        }

        return null;
    }

    private function parseConcerns(string $md, array &$warnings): array
    {
        $rows = $this->parser->extractRows($md, '/^Dn-\d+$/');
        if ($rows === []) {
            $warnings[] = 'Geen concern-rijen gevonden in 01-concerns.md.';
        }
        $concerns = [];
        foreach ($rows as $c) {
            if (count($c) < 3) {
                continue;
            }
            $concerns[] = [
                'id' => $c[0],
                'title' => trim(str_replace('**', '', $c[1])),
                'status' => $this->concernStatus($c[2]),
                'detail' => $c[3] ?? '',
                'resolution' => $c[4] ?? '',
            ];
        }

        return $concerns;
    }

    private function concernStatus(string $cell): string
    {
        $c = strtolower($cell);

        return match (true) {
            str_contains($c, 'closed') => 'closed',
            str_contains($c, 'partly') => 'partly',
            default => 'open',
        };
    }

    private function buildIdMap(array $pages, array $patterns, array $concerns): array
    {
        $map = [];
        foreach ($pages as $p) {
            $map[$p['id']] = "{$p['name']} ({$p['slug']})";
        }
        foreach ($patterns as $p) {
            $map[$p['id']] = $p['name'];
        }
        foreach ($concerns as $c) {
            $map[$c['id']] = Str::limit($c['title'], 80);
        }

        return $map;
    }

    private function overview(array $pages, array $patterns, array $concerns): array
    {
        $confs = array_filter(array_column($pages, 'confidence'));
        $atDraft = collect($pages)->filter(fn ($p) => $p['stages']['ux'] !== Stage::NotStarted)->count();
        $drafted = collect($patterns)->filter(fn ($p) => Stage::fromEmoji($p['status']) !== Stage::NotStarted)->count();
        $byStatus = collect($concerns)->countBy('status');

        return [
            'pagesAtDraft' => $atDraft,
            'pagesTotal' => count($pages),
            'avgConfidence' => $confs ? round(array_sum($confs) / count($confs), 1) : 0,
            'patternsDrafted' => $drafted,
            'patternsTotal' => count($patterns),
            'concernsOpen' => $byStatus['open'] ?? 0,
            'concernsPartly' => $byStatus['partly'] ?? 0,
            'concernsClosed' => $byStatus['closed'] ?? 0,
        ];
    }

    public static function linkify(string $text, array $idMap): string
    {
        $escaped = htmlspecialchars($text, ENT_QUOTES);

        return preg_replace_callback('/\b((?:P|SP|Dn)-\d+)\b/', function ($m) use ($idMap) {
            $id = $m[1];
            $title = htmlspecialchars($idMap[$id] ?? $id, ENT_QUOTES);

            return "<a href=\"#{$id}\" class=\"tok\"><abbr title=\"{$title}\">{$id}</abbr></a>";
        }, $escaped);
    }

    /** Strip markdown noise (links→label, bold, code, stray brackets) to plain prose. */
    public static function plainify(string $md): string
    {
        $s = preg_replace('/\[([^\]]+)\]\([^)]*\)/', '$1', $md); // [label](url) → label
        $s = str_replace(['**', '`', '[', ']'], '', $s);         // bold · code · stray refs
        $s = preg_replace('/\s+/', ' ', $s);

        return trim($s);
    }

    /** Plain-text lead for a register row: first sentence, else truncated to $max. */
    public static function summarize(string $md, int $max = 150): string
    {
        $t = self::plainify($md);
        $first = Str::before($t, '. ');
        if ($first !== $t && mb_strlen($first) >= 16 && mb_strlen($first) <= $max) {
            return $first.'.';
        }

        return Str::limit($t, $max);
    }
}
