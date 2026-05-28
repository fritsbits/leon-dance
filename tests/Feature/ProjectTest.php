<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_project_resolves_by_slug_and_has_a_name(): void
    {
        $project = Project::create(['slug' => 'mariage', 'name' => 'Mariage']);

        $this->assertSame('mariage', $project->getRouteKey());
        $this->assertSame('Mariage', Project::where('slug', 'mariage')->first()->name);
    }
}
