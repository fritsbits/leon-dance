<?php

namespace Tests\Feature;

use App\Enums\AtelierType;
use App\Models\Atelier;
use App\Models\Venue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AtelierTest extends TestCase
{
    use RefreshDatabase;

    public function test_scopes_filter_by_type_and_active(): void
    {
        $venue = Venue::factory()->create();
        Atelier::factory()->open()->create(['venue_id' => $venue->id]);
        Atelier::factory()->school()->create(['venue_id' => $venue->id]);
        Atelier::factory()->open()->create(['venue_id' => $venue->id, 'is_active' => false]);

        $this->assertSame(2, Atelier::open()->count());
        $this->assertSame(1, Atelier::school()->count());
        $this->assertSame(2, Atelier::active()->count());
    }

    public function test_display_name_falls_back_to_type_venue_day(): void
    {
        $venue = Venue::factory()->create(['name' => 'Pianofabriek']);

        $unnamed = Atelier::factory()->open()->create([
            'venue_id' => $venue->id, 'day_of_week' => 3, 'name' => null,
        ]);
        $this->assertSame('Open · Pianofabriek · Woensdag', $unnamed->displayName());

        $named = Atelier::factory()->open()->create([
            'venue_id' => $venue->id, 'name' => 'Atelier Leon',
        ]);
        $this->assertSame('Atelier Leon', $named->displayName());
    }

    public function test_day_label_and_time_range(): void
    {
        $a = Atelier::factory()->create([
            'day_of_week' => 6, 'start_time' => '10:00', 'end_time' => '12:00',
        ]);
        $this->assertSame('Zaterdag', $a->dayLabel());
        $this->assertSame('10:00–12:00', $a->timeRange());
    }
}
