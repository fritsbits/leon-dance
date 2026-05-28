<?php

namespace Tests\Feature;

use App\Models\Editie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OpenCallSurfacesTest extends TestCase
{
    use RefreshDatabase;

    private function makeEditie(array $overrides = []): Editie
    {
        return Editie::create(array_merge([
            'project_slug' => 'mariage',
            'slug'         => 'teststad-2026',
            'stad'         => 'Teststad',
            'jaar'         => 2026,
            'periode'      => 'jan – mrt 2026',
            'starts_at'    => now()->addMonth(),
            'ends_at'      => now()->addMonths(3),
        ], $overrides));
    }

    public function test_unknown_editie_slug_404s(): void
    {
        $this->get('/dansateliers-performances/mariage/onbestaande-editie')
            ->assertNotFound();
    }
}
