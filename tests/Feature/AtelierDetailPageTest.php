<?php

namespace Tests\Feature;

use App\Enums\AtelierType;
use App\Enums\EventType;
use App\Models\Atelier;
use App\Models\Event;
use App\Models\Venue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AtelierDetailPageTest extends TestCase
{
    use RefreshDatabase;

    private function openAtelier(array $overrides = []): Atelier
    {
        $venue = Venue::factory()->create([
            'name' => 'Pianofabriek', 'area' => 'Sint-Gillis',
            'address' => 'Fortstraat 35, 1060 Sint-Gillis', 'lat' => 50.8282, 'lng' => 4.3423,
        ]);

        return Atelier::factory()->open()->create(array_merge([
            'venue_id' => $venue->id, 'slug' => 'pianofabriek', 'day_of_week' => 3,
            'name' => 'Atelier Leon',
        ], $overrides));
    }

    public function test_open_atelier_detail_page_renders(): void
    {
        $this->openAtelier();

        $this->get('/dansateliers-performances/atelier-leon/pianofabriek')
            ->assertOk()
            ->assertSee('Atelier Leon · Pianofabriek')
            ->assertSee('Fortstraat 35, 1060 Sint-Gillis')
            ->assertSee('woensdag');
    }

    public function test_upcoming_event_at_this_atelier_is_listed(): void
    {
        $atelier = $this->openAtelier();
        Event::create([
            'type' => EventType::OpenAtelier, 'title' => 'Atelier Leon',
            'atelier_id' => $atelier->id, 'is_public' => true,
            'starts_at' => now()->addDays(3)->setTime(16, 0),
            'ends_at' => now()->addDays(3)->setTime(18, 0),
        ]);

        $this->get('/dansateliers-performances/atelier-leon/pianofabriek')
            ->assertOk()
            ->assertSee('Eerstvolgende keren hier');
    }

    public function test_school_atelier_slug_404s(): void
    {
        $school = Atelier::factory()->school()->create(['slug' => 'leon-op-school']);

        $this->get('/dansateliers-performances/atelier-leon/'.$school->slug)
            ->assertNotFound();
    }

    public function test_inactive_open_atelier_404s(): void
    {
        $this->openAtelier(['slug' => 'gesloten', 'is_active' => false]);

        $this->get('/dansateliers-performances/atelier-leon/gesloten')
            ->assertNotFound();
    }

    public function test_unknown_slug_404s(): void
    {
        $this->get('/dansateliers-performances/atelier-leon/bestaat-niet')
            ->assertNotFound();
    }

    public function test_overview_links_to_the_detail_page(): void
    {
        $this->openAtelier();

        $this->get('/dansateliers-performances/atelier-leon')
            ->assertOk()
            ->assertSee('/dansateliers-performances/atelier-leon/pianofabriek', false);
    }

    public function test_overview_eerstvolgende_rows_link_to_the_instance_not_the_agenda(): void
    {
        $atelier = $this->openAtelier();
        Event::create([
            'type' => EventType::OpenAtelier, 'title' => 'Atelier Leon · Pianofabriek',
            'atelier_id' => $atelier->id, 'is_public' => true,
            'starts_at' => now()->addDays(2)->setTime(16, 0),
            'ends_at' => now()->addDays(2)->setTime(18, 0),
        ]);

        // The eerstvolgende date-row (SP-08, anchor class starts "flex") must link to this
        // atelier's page, not the agenda. The §4 location block uses a "block ..." class, so
        // this regex matches only the date-row anchor.
        $response = $this->get('/dansateliers-performances/atelier-leon');
        $response->assertOk();
        $this->assertMatchesRegularExpression(
            '#href="[^"]*dansateliers-performances/atelier-leon/pianofabriek"\s+class="flex#',
            $response->getContent(),
        );
    }
}
