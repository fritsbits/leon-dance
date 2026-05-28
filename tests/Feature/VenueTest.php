<?php

namespace Tests\Feature;

use App\Models\Atelier;
use App\Models\Venue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VenueTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_venue_has_ateliers(): void
    {
        $venue = Venue::create([
            'name' => 'Pianofabriek',
            'area' => 'Sint-Gillis',
            'address' => 'Fortstraat 35, 1060 Sint-Gillis',
        ]);

        Atelier::create([
            'type' => 'open',
            'venue_id' => $venue->id,
            'day_of_week' => 3,
            'start_time' => '16:00',
            'end_time' => '18:00',
        ]);

        $this->assertSame(1, $venue->ateliers()->count());
        $this->assertSame('Sint-Gillis', $venue->fresh()->area);
    }
}
