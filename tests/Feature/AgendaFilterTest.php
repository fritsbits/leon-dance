<?php

namespace Tests\Feature;

use App\Enums\AtelierType;
use App\Enums\EventType;
use App\Models\Atelier;
use App\Models\Edition;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AgendaFilterTest extends TestCase
{
    use RefreshDatabase;

    public function test_agenda_strand_filters_use_relationships(): void
    {
        $project = Project::create(['slug' => 'mariage', 'name' => 'Mariage']);
        $edition = Edition::create([
            'project_id' => $project->id, 'project_slug' => 'mariage', 'slug' => 'brussel-2099',
            'stad' => 'Brussel', 'jaar' => 2099, 'starts_at' => now(), 'ends_at' => now()->addMonth(),
        ]);
        $openAtelier = Atelier::factory()->open()->create();

        $atelierEvent = Event::create([
            'type' => EventType::OpenAtelier, 'title' => 'Atelier Leon', 'atelier_id' => $openAtelier->id,
            'is_public' => true, 'starts_at' => now()->addDay(), 'ends_at' => now()->addDay()->addHours(2),
        ]);
        $show = Event::create([
            'type' => EventType::Voorstelling, 'title' => 'Mariage', 'edition_id' => $edition->id,
            'is_public' => true, 'starts_at' => now()->addDays(2), 'ends_at' => now()->addDays(2)->addHour(),
        ]);

        // practice=atelier-leon shows the open atelier, not the show
        $this->get('/agenda?practice=atelier-leon')->assertOk()->assertSee('Atelier Leon')->assertDontSee('>Mariage<', false);
        // project=mariage shows the show
        $this->get('/agenda?project=mariage')->assertOk()->assertSee('Mariage');
    }
}
