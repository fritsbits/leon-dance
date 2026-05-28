<?php

namespace Tests\Feature;

use App\Enums\AtelierType;
use App\Enums\EventType;
use App\Models\Atelier;
use App\Models\Event;
use App\Models\Venue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventAtelierTest extends TestCase
{
    use RefreshDatabase;

    public function test_for_atelier_type_scope_filters_events_by_atelier(): void
    {
        $venue = Venue::factory()->create();
        $open = Atelier::factory()->open()->create(['venue_id' => $venue->id]);
        $school = Atelier::factory()->school()->create(['venue_id' => $venue->id]);

        Event::create([
            'type' => EventType::OpenAtelier, 'title' => 'Atelier Leon',
            'atelier_id' => $open->id, 'venue_id' => $venue->id, 'is_public' => true,
            'starts_at' => now()->addDay(), 'ends_at' => now()->addDay()->addHours(2),
        ]);
        Event::create([
            'type' => EventType::Klas, 'title' => 'Leon in de klas',
            'atelier_id' => $school->id, 'venue_id' => $venue->id, 'is_public' => true,
            'starts_at' => now()->addDays(2), 'ends_at' => now()->addDays(2)->addHours(2),
        ]);

        $openEvents = Event::forAtelierType(AtelierType::Open)->get();

        $this->assertCount(1, $openEvents);
        $this->assertSame('Atelier Leon', $openEvents->first()->title);
        $this->assertSame(AtelierType::Open, $openEvents->first()->atelier->type);
    }
}
