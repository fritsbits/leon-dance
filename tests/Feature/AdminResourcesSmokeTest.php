<?php

namespace Tests\Feature;

use App\Filament\Admin\Resources\Ateliers\Pages\CreateAtelier;
use App\Filament\Admin\Resources\Venues\Pages\CreateVenue;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * Builds the Atelier + Venue admin forms via Livewire so a broken schema (FileUpload,
 * relationship Select, enum options) surfaces as a failing test. Asserts the two
 * team-facing fields this work added — Atelier.lead and Venue.photo — actually exist.
 */
class AdminResourcesSmokeTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Filament::setCurrentPanel(Filament::getPanel('admin'));
        $this->actingAs(User::factory()->create());
    }

    public function test_atelier_form_builds_with_lead_field(): void
    {
        Livewire::test(CreateAtelier::class)
            ->assertOk()
            ->assertFormFieldExists('lead')
            ->assertFormFieldExists('venue_id')
            ->assertFormFieldExists('slug');
    }

    public function test_venue_form_builds_with_photo_field(): void
    {
        Livewire::test(CreateVenue::class)
            ->assertOk()
            ->assertFormFieldExists('photo')
            ->assertFormFieldExists('photo_credit')
            ->assertFormFieldExists('lat');
    }
}
