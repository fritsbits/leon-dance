<?php

namespace Tests\Feature;

use App\Enums\AtelierType;
use App\Models\Atelier;
use App\Models\Venue;
use Database\Seeders\AtelierSeeder;
use Database\Seeders\VenueSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AtelierSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_seeds_two_open_ateliers_with_venues(): void
    {
        $this->seed(VenueSeeder::class);
        $this->seed(AtelierSeeder::class);

        $this->assertSame(2, Atelier::open()->count());

        $piano = Atelier::open()->whereHas('venue', fn ($q) => $q->where('name', 'Pianofabriek'))->first();
        $this->assertNotNull($piano);
        $this->assertSame(3, $piano->day_of_week);
        $this->assertSame('Fortstraat 35, 1060 Sint-Gillis', $piano->venue->address);
    }

    public function test_seeders_are_idempotent(): void
    {
        $this->seed(VenueSeeder::class);
        $this->seed(VenueSeeder::class);
        $this->seed(AtelierSeeder::class);
        $this->seed(AtelierSeeder::class);

        $this->assertSame(2, Atelier::open()->count());
        $this->assertSame(2, Venue::whereIn('name', ['Pianofabriek', 'Maison des Cultures'])->count());
    }
}
