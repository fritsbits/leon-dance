<?php

namespace Tests\Feature;

use App\Enums\EventType;
use App\Models\Atelier;
use App\Models\Event;
use App\Models\Venue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AtelierLeonPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_waar_en_wanneer_lists_open_ateliers_from_the_model(): void
    {
        $venue = Venue::create([
            'name' => 'Pianofabriek',
            'area' => 'Sint-Gillis',
            'address' => 'Fortstraat 35, 1060 Sint-Gillis',
        ]);
        Atelier::factory()->open()->create([
            'venue_id' => $venue->id, 'day_of_week' => 3,
            'start_time' => '16:00', 'end_time' => '18:00',
        ]);

        $this->get('/dansateliers-performances/atelier-leon')
            ->assertOk()
            ->assertSee('Woensdag')
            ->assertSee('16:00–18:00')
            ->assertSee('Pianofabriek')
            ->assertSee('Fortstraat 35, 1060 Sint-Gillis');
    }

    public function test_eerstvolgende_lists_upcoming_open_atelier_events(): void
    {
        $venue = Venue::create(['name' => 'Pianofabriek', 'area' => 'Sint-Gillis']);
        $atelier = Atelier::factory()->open()->create(['venue_id' => $venue->id, 'day_of_week' => 3]);

        Event::create([
            'type' => EventType::OpenAtelier, 'title' => 'Atelier Leon', 'venue' => 'Pianofabriek',
            'atelier_id' => $atelier->id, 'venue_id' => $venue->id, 'is_public' => true,
            'starts_at' => now()->addDays(2)->setTime(16, 0), 'ends_at' => now()->addDays(2)->setTime(18, 0),
        ]);

        $this->get('/dansateliers-performances/atelier-leon')
            ->assertOk()
            ->assertSee('Volledige agenda');
    }
}
