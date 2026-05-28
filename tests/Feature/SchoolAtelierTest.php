<?php

namespace Tests\Feature;

use App\Enums\AtelierType;
use App\Enums\EventType;
use App\Models\Atelier;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SchoolAtelierTest extends TestCase
{
    use RefreshDatabase;

    public function test_school_atelier_has_no_weekly_slot_and_parents_klas_events(): void
    {
        $school = Atelier::create([
            'type' => AtelierType::School->value, 'name' => 'Leon op school',
            'is_active' => true,
        ]);

        $this->assertNull($school->day_of_week);
        $this->assertSame('', $school->dayLabel());
        $this->assertSame('', $school->timeRange());
        $this->assertSame('Leon op school', $school->displayName());

        Event::create([
            'type' => EventType::Klas, 'title' => 'Leon in de klas',
            'atelier_id' => $school->id, 'is_public' => true,
            'starts_at' => now()->addDay(), 'ends_at' => now()->addDay()->addHours(2),
        ]);

        $this->assertSame(1, Event::forAtelierType(AtelierType::School)->count());
    }
}
