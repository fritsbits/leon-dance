@php
    use App\Support\Build\BuildStatus;

    $lines = $sitemap ? preg_split('/\R/', $sitemap) : [];

    // Split the tree from the trailing meta-notes (footer / internal / not-in-v1 / future).
    $metaStart = null;
    foreach ($lines as $i => $l) {
        if (preg_match('/^(Site-wide footer|Internal-only|Not in v1|Future)/', $l)) {
            $metaStart = $i;
            break;
        }
    }
    $treeLines = $metaStart === null ? $lines : array_slice($lines, 0, $metaStart);
    $metaLines = $metaStart === null ? [] : array_slice($lines, $metaStart);

    while ($treeLines && trim(end($treeLines)) === '') {
        array_pop($treeLines);
    }

    // Each tree line → a node (has "── ", split prefix | name | annotation) or a plain line.
    $nodes = [];
    foreach ($treeLines as $l) {
        $pos = mb_strpos($l, '── ');
        if ($pos === false) {
            $nodes[] = ['type' => 'plain', 'text' => $l];

            continue;
        }
        $prefix = mb_substr($l, 0, $pos + 3); // include "── "
        $rest = mb_substr($l, $pos + 3);
        if (preg_match('/^(.*?)\s{2,}(.*)$/u', $rest, $m)) {
            $nodes[] = ['type' => 'node', 'prefix' => $prefix, 'name' => $m[1], 'ann' => $m[2]];
        } else {
            $nodes[] = ['type' => 'node', 'prefix' => $prefix, 'name' => $rest, 'ann' => ''];
        }
    }

    // Group meta-notes into [label, value], folding indented continuation lines into the previous note.
    $notes = [];
    foreach ($metaLines as $l) {
        if (trim($l) === '') {
            continue;
        }
        if (! str_starts_with($l, ' ') && preg_match('/^([^:]+):\s*(.*)$/', $l, $m)) {
            $notes[] = ['label' => trim($m[1]), 'value' => trim($m[2])];
        } elseif ($notes) {
            $notes[count($notes) - 1]['value'] .= ' '.trim($l);
        }
    }
@endphp
<section id="structuur">
  <h2 class="sec">@svg('heroicon-o-map', 'sec-ico') Structuur — sitemap</h2>
  @if ($structureStale)
    <div class="stale-hint">
      ⓘ <code>30-structure.md</code> ({{ $structureStale['structureDate'] }}) is ouder dan een recent
      bewerkte pagina (<a href="#{{ $structureStale['pageId'] }}">{{ $structureStale['page'] }}</a>,
      {{ $structureStale['pageDate'] }}). De sitemap-omschrijvingen kunnen achterlopen — controleer of ze nog kloppen.
    </div>
  @endif
  @if (! $sitemap)
    <p class="legend">Sitemap-blok niet gevonden in 30-structure.md.</p>
  @else
    <div class="smap">
      @foreach ($nodes as $n)
        @if ($n['type'] === 'plain')
          @if (trim($n['text']) === '')
            <div class="smap-gap"></div>
          @else
            <div class="smap-plain {{ trim($n['text']) === 'HOME' ? 'smap-root' : '' }}">{{ $n['text'] }}</div>
          @endif
        @else
          <div class="smap-branch"><span class="smap-pre">{{ $n['prefix'] }}</span><span class="smap-name">{{ $n['name'] }}</span></div>
          <div class="smap-ann">{!! $n['ann'] === '' ? '' : BuildStatus::linkify($n['ann'], $idMap) !!}</div>
        @endif
      @endforeach
    </div>

    @if ($notes)
      <div class="smap-notes">
        @foreach ($notes as $note)
          <div class="smap-note">
            <div class="k">{{ $note['label'] }}</div>
            <div class="v">{!! BuildStatus::linkify($note['value'], $idMap) !!}</div>
          </div>
        @endforeach
      </div>
    @endif
  @endif
</section>
