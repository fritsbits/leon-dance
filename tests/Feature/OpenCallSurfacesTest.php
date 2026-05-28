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

    public function test_known_editie_slug_renders(): void
    {
        $this->makeEditie(['slug' => 'luik-2026', 'stad' => 'Luik']);

        $this->get('/dansateliers-performances/mariage/luik-2026')
            ->assertOk()
            ->assertSee('Luik 2026');
    }

    public function test_editie_section5_shows_invite_when_inschrijving_open(): void
    {
        $this->makeEditie(['slug' => 'luik-2026', 'stad' => 'Luik', 'inschrijving_open' => true]);

        $this->get('/dansateliers-performances/mariage/luik-2026')
            ->assertOk()
            ->assertSee('vormt zich nu')
            ->assertSee('Schrijf je in');
    }

    public function test_editie_section5_shows_closed_copy_when_toggled_off(): void
    {
        // aankomend (future dates) but inschrijving toggled off → "gesloten", not the invite
        $this->makeEditie(['slug' => 'gent-2025', 'stad' => 'Gent', 'inschrijving_open' => false]);

        $this->get('/dansateliers-performances/mariage/gent-2025')
            ->assertOk()
            ->assertSee('inschrijvingen voor deze editie zijn gesloten')
            ->assertDontSee('Schrijf je in');
    }

    public function test_editie_section5_shows_afgerond_copy_when_past(): void
    {
        $this->makeEditie([
            'slug' => 'brussel-2024', 'stad' => 'Brussel',
            'starts_at' => now()->subMonths(6), 'ends_at' => now()->subMonths(3),
            'inschrijving_open' => false,
        ]);

        $this->get('/dansateliers-performances/mariage/brussel-2024')
            ->assertOk()
            ->assertSee('is afgerond');
    }

    public function test_editie_section5_shows_closing_date_when_soon(): void
    {
        $this->makeEditie([
            'slug' => 'luik-2026', 'stad' => 'Luik',
            'inschrijving_open' => true,
            'inschrijving_closes_at' => now()->addDays(7),
        ]);

        $this->get('/dansateliers-performances/mariage/luik-2026')
            ->assertOk()
            ->assertSee('Inschrijven kan tot');
    }

    public function test_home_shows_band_when_an_open_call_exists(): void
    {
        $this->makeEditie(['slug' => 'luik-2026', 'stad' => 'Luik', 'inschrijving_open' => true]);

        $this->get('/')
            ->assertOk()
            ->assertSee('Nieuwe editie')
            ->assertSee('Ontdek deze editie')
            ->assertSee('Luik 2026');
    }

    public function test_home_hides_band_when_no_open_call(): void
    {
        $this->makeEditie(['slug' => 'luik-2026', 'stad' => 'Luik', 'inschrijving_open' => false]);

        $this->get('/')
            ->assertOk()
            ->assertDontSee('Ontdek deze editie');
    }
}
