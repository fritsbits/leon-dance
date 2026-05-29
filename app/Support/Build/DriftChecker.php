<?php

namespace App\Support\Build;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class DriftChecker
{
    /** @param string[] $stubMarkers */
    public function __construct(
        private int $stubLineThreshold,
        private array $stubMarkers,
    ) {}

    /**
     * @param  array<int,array>  $pages
     * @param  array<int,array>  $patterns
     * @return array<int,array{id:string,message:string}>
     */
    public function check(array $pages, array $patterns): array
    {
        $findings = [];
        $routePaths = $this->routePaths();

        foreach ($pages as $p) {
            if ($p['stages']['ux'] !== Stage::NotStarted && ! File::exists(base_path($p['briefPath']))) {
                $findings[] = ['id' => $p['id'], 'message' => "{$p['id']}: UX gemarkeerd maar briefing {$p['briefPath']} ontbreekt."];
            }
            if ($p['stages']['wireframe'] !== Stage::NotStarted && $this->viewIsStub($p['viewPath'] ?? null)) {
                $findings[] = ['id' => $p['id'], 'message' => "{$p['id']}: Wireframe gemarkeerd maar view lijkt nog een stub."];
            }
            $slug = trim($p['slug'] ?? '', '/');
            if (! $this->routeExists($slug, $routePaths)) {
                $findings[] = ['id' => $p['id'], 'message' => "{$p['id']}: slug /{$slug} niet als route geregistreerd."];
            }
        }

        foreach ($patterns as $pat) {
            if (! empty($pat['partialPath']) && ! File::exists(base_path($pat['partialPath']))) {
                $findings[] = ['id' => $pat['id'], 'message' => "{$pat['id']}: partial {$pat['partialPath']} geclaimd maar ontbreekt."];
            }
        }

        return $findings;
    }

    private function viewIsStub(?string $viewPath): bool
    {
        if (! $viewPath) {
            return false; // unknown view → don't flag
        }
        $full = base_path($viewPath);
        if (! File::exists($full)) {
            return true;
        }
        $content = File::get($full);
        if (substr_count($content, "\n") + 1 < $this->stubLineThreshold) {
            return true;
        }
        foreach ($this->stubMarkers as $marker) {
            if (str_contains($content, $marker)) {
                return true;
            }
        }

        return false;
    }

    /** @param string[] $routePaths */
    private function routeExists(string $slug, array $routePaths): bool
    {
        return in_array($slug === '' ? '/' : $slug, $routePaths, true);
    }

    /** @return string[] */
    private function routePaths(): array
    {
        return collect(Route::getRoutes())
            ->map(fn ($r) => trim($r->uri(), '/') ?: '/')
            ->all();
    }
}
