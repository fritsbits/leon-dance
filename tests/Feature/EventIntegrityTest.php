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

class EventIntegrityTest extends TestCase
{
    use RefreshDatabase;

    private function base(array $o = []): array
    {
        return array_merge([
            'title' => 'x', 'is_public' => true,
            'starts_at' => now()->addDay(), 'ends_at' => now()->addDay()->addHour(),
        ], $o);
    }

    public function test_open_atelier_requires_atelier_and_rejects_edition(): void
    {
        $atelier = Atelier::factory()->open()->create();
        $ok = Event::create($this->base(['type' => EventType::OpenAtelier, 'atelier_id' => $atelier->id]));
        $this->assertNotNull($ok->id);

        $this->expectException(\InvalidArgumentException::class);
        Event::create($this->base(['type' => EventType::OpenAtelier])); // no atelier
    }

    public function test_voorstelling_requires_edition_and_rejects_atelier(): void
    {
        $project = Project::create(['slug' => 'mariage', 'name' => 'Mariage']);
        $edition = Edition::create(['project_id' => $project->id, 'slug' => 'b-2099', 'stad' => 'B', 'jaar' => 2099, 'starts_at' => now(), 'ends_at' => now()->addMonth()]);
        $atelier = Atelier::factory()->open()->create();

        $ok = Event::create($this->base(['type' => EventType::Voorstelling, 'edition_id' => $edition->id]));
        $this->assertNotNull($ok->id);

        $this->expectException(\InvalidArgumentException::class);
        Event::create($this->base(['type' => EventType::Voorstelling, 'edition_id' => $edition->id, 'atelier_id' => $atelier->id]));
    }

    public function test_internal_type_rejects_any_parent(): void
    {
        $ok = Event::create($this->base(['type' => EventType::LeonRondDeTafel]));
        $this->assertNotNull($ok->id);

        $atelier = Atelier::factory()->open()->create();
        $this->expectException(\InvalidArgumentException::class);
        Event::create($this->base(['type' => EventType::LeonRondDeTafel, 'atelier_id' => $atelier->id]));
    }
}
