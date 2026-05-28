<?php

namespace Tests\Feature;

use App\Enums\EventType;
use App\Models\Event;
use App\Models\Venue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventVenueTest extends TestCase
{
    use RefreshDatabase;

    public function test_venue_label_prefers_related_venue_then_falls_back(): void
    {
        $venue = Venue::factory()->create(['name' => 'Pianofabriek']);

        $linked = Event::create([
            'type' => EventType::LeonRondDeTafel, 'title' => 'Mariage',
            'venue_id' => $venue->id, 'venue_name' => 'ignored-freetext', 'is_public' => true,
            'starts_at' => now()->addDay(), 'ends_at' => now()->addDay()->addHour(),
        ]);
        $this->assertSame('Pianofabriek', $linked->venueLabel());
        $this->assertSame($venue->id, $linked->venue->id);

        $freetext = Event::create([
            'type' => EventType::LeonRondDeTafel, 'title' => 'Mariage',
            'venue_name' => 'MolenFest, Molenbeek', 'is_public' => true,
            'starts_at' => now()->addDays(2), 'ends_at' => now()->addDays(2)->addHour(),
        ]);
        $this->assertNull($freetext->venue);
        $this->assertSame('MolenFest, Molenbeek', $freetext->venueLabel());
    }
}
