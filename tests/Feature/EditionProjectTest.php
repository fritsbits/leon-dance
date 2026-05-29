<?php

namespace Tests\Feature;

use App\Models\Edition;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditionProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_edition_belongs_to_project(): void
    {
        $project = Project::create(['slug' => 'mariage', 'name' => 'Mariage']);
        $edition = Edition::create([
            'project_id' => $project->id,
            'slug' => 'brussel-2099', 'stad' => 'Brussel', 'jaar' => 2099,
            'starts_at' => now(), 'ends_at' => now()->addMonth(),
        ]);

        $this->assertSame('Mariage', $edition->project->name);
        $this->assertSame(1, $project->editions()->count());
    }
}
