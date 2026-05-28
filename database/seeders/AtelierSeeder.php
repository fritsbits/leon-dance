<?php

namespace Database\Seeders;

use App\Enums\AtelierType;
use App\Models\Atelier;
use App\Models\Venue;
use Illuminate\Database\Seeder;

class AtelierSeeder extends Seeder
{
    public function run(): void
    {
        $piano = Venue::where('name', 'Pianofabriek')->first();
        $maison = Venue::where('name', 'Maison des Cultures')->first();

        // The open ateliers ARE "Atelier Leon".
        Atelier::updateOrCreate(
            ['type' => AtelierType::Open->value, 'venue_id' => $piano?->id, 'day_of_week' => 3],
            ['start_time' => '16:00', 'end_time' => '18:00', 'name' => 'Atelier Leon', 'is_active' => true, 'sort' => 1],
        );
        Atelier::updateOrCreate(
            ['type' => AtelierType::Open->value, 'venue_id' => $maison?->id, 'day_of_week' => 6],
            ['start_time' => '10:00', 'end_time' => '12:00', 'name' => 'Atelier Leon', 'is_active' => true, 'sort' => 2],
        );

        // School ateliers (Leon op school) are deferred to the leon-op-school page slice.
    }
}
