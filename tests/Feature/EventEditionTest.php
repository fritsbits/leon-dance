<?php

namespace Tests\Feature;

use App\Enums\EventType;
use App\Models\Edition;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventEditionTest extends TestCase
{
    use RefreshDatabase;

    public function test_event_belongs_to_edition(): void
    {
        $project = Project::create(['slug' => 'mariage', 'name' => 'Mariage']);
        $edition = Edition::create([
            'project_id' => $project->id, 'slug' => 'brussel-2099',
            'stad' => 'Brussel', 'jaar' => 2099, 'starts_at' => now(), 'ends_at' => now()->addMonth(),
        ]);
        $event = Event::create([
            'type' => EventType::Voorstelling, 'title' => 'Mariage',
            'edition_id' => $edition->id, 'is_public' => true,
            'starts_at' => now()->addWeek(), 'ends_at' => now()->addWeek()->addHour(),
        ]);

        $this->assertSame('brussel-2099', $event->edition->slug);
        $this->assertSame(1, $edition->events()->count());
    }
}
