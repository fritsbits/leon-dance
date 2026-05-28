<?php

namespace Tests\Feature;

use App\Models\Edition;
use App\Models\Event;
use App\Enums\EventType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditionModelTest extends TestCase
{
    use RefreshDatabase;

    private function makeEditie(array $overrides = []): Edition
    {
        return Edition::create(array_merge([
            'project_slug' => 'mariage',
            'slug'         => 'teststad-2026',
            'stad'         => 'Teststad',
            'jaar'         => 2026,
            'periode'      => 'jan – mrt 2026',
            'starts_at'    => '2026-01-15',
            'ends_at'      => '2026-03-31',
        ], $overrides));
    }

    public function test_status_is_derived_from_dates(): void
    {
        $this->assertSame('aankomend', $this->makeEditie([
            'slug' => 'a', 'starts_at' => now()->addMonth(), 'ends_at' => now()->addMonths(3),
        ])->status());

        $this->assertSame('lopend', $this->makeEditie([
            'slug' => 'b', 'starts_at' => now()->subWeek(), 'ends_at' => now()->addWeek(),
        ])->status());

        $this->assertSame('afgelopen', $this->makeEditie([
            'slug' => 'c', 'starts_at' => now()->subMonths(3), 'ends_at' => now()->subMonth(),
        ])->status());
    }

    public function test_inschrijving_open_truth_table(): void
    {
        // toggle off → closed regardless of date
        $this->assertFalse($this->makeEditie(['slug' => 'off', 'inschrijving_open' => false])->isInschrijvingOpen());

        // toggle on, no closing date → open
        $this->assertTrue($this->makeEditie(['slug' => 'nodate', 'inschrijving_open' => true])->isInschrijvingOpen());

        // toggle on, closing date in the future → open
        $this->assertTrue($this->makeEditie([
            'slug' => 'future', 'inschrijving_open' => true, 'inschrijving_closes_at' => now()->addWeek(),
        ])->isInschrijvingOpen());

        // toggle on, closing date today → still open
        $this->assertTrue($this->makeEditie([
            'slug' => 'today', 'inschrijving_open' => true, 'inschrijving_closes_at' => now(),
        ])->isInschrijvingOpen());

        // toggle on, closing date in the past → auto-closed
        $this->assertFalse($this->makeEditie([
            'slug' => 'past', 'inschrijving_open' => true, 'inschrijving_closes_at' => now()->subDay(),
        ])->isInschrijvingOpen());
    }

    public function test_open_inschrijving_scope_filters_correctly(): void
    {
        $this->makeEditie(['slug' => 'open-a', 'inschrijving_open' => true]);
        $this->makeEditie(['slug' => 'open-b', 'inschrijving_open' => true, 'inschrijving_closes_at' => now()->addWeek()]);
        $this->makeEditie(['slug' => 'closed-toggle', 'inschrijving_open' => false]);
        $this->makeEditie(['slug' => 'closed-date', 'inschrijving_open' => true, 'inschrijving_closes_at' => now()->subDay()]);

        $slugs = Edition::openInschrijving()->pluck('slug')->all();

        $this->assertEqualsCanonicalizing(['open-a', 'open-b'], $slugs);
    }

    public function test_inschrijving_closes_soon_only_when_near(): void
    {
        $near = $this->makeEditie(['slug' => 'near', 'inschrijving_open' => true, 'inschrijving_closes_at' => now()->addDays(5)]);
        $far  = $this->makeEditie(['slug' => 'far', 'inschrijving_open' => true, 'inschrijving_closes_at' => now()->addDays(90)]);
        $none = $this->makeEditie(['slug' => 'none', 'inschrijving_open' => true]);
        $boundary = $this->makeEditie(['slug' => 'boundary', 'inschrijving_open' => true, 'inschrijving_closes_at' => now()->addDays(21)]);
        $justOver = $this->makeEditie(['slug' => 'just-over', 'inschrijving_open' => true, 'inschrijving_closes_at' => now()->addDays(22)]);

        $this->assertTrue($near->inschrijvingClosesSoon());
        $this->assertFalse($far->inschrijvingClosesSoon());
        $this->assertFalse($none->inschrijvingClosesSoon());
        $this->assertTrue($boundary->inschrijvingClosesSoon());
        $this->assertFalse($justOver->inschrijvingClosesSoon());
    }

    public function test_events_relation_matches_editie_slug(): void
    {
        $editie = $this->makeEditie(['slug' => 'rel-2026']);
        Event::create([
            'type' => EventType::Voorstelling, 'title' => 'Mariage', 'editie_slug' => 'rel-2026',
            'starts_at' => now()->addMonth(), 'is_public' => true,
        ]);
        Event::create([
            'type' => EventType::Voorstelling, 'title' => 'Andere', 'editie_slug' => 'other',
            'starts_at' => now()->addMonth(), 'is_public' => true,
        ]);

        $this->assertCount(1, $editie->events);
        $this->assertSame('Mariage', $editie->events->first()->title);
    }

    public function test_seeder_creates_six_mariage_edities_with_luik_open(): void
    {
        $this->seed(\Database\Seeders\EditionSeeder::class);

        $this->assertSame(6, Edition::where('project_slug', 'mariage')->count());

        $luik = Edition::where('slug', 'luik-2026')->firstOrFail();
        $this->assertTrue($luik->isInschrijvingOpen(), 'Luik 2026 is the live open-call demo editie.');

        $brussel = Edition::where('slug', 'brussel-2024')->firstOrFail();
        $this->assertFalse($brussel->isInschrijvingOpen());
        $this->assertSame('afgelopen', $brussel->status());
    }
}
