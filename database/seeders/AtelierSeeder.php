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

        // The open ateliers ARE "Atelier Leon". Slug = venue, used by the detail page route.
        Atelier::updateOrCreate(
            ['type' => AtelierType::Open->value, 'venue_id' => $piano?->id, 'day_of_week' => 3],
            ['slug' => 'pianofabriek', 'start_time' => '16:00', 'end_time' => '18:00', 'name' => 'Atelier Leon', 'is_active' => true, 'sort' => 1],
        );
        Atelier::updateOrCreate(
            ['type' => AtelierType::Open->value, 'venue_id' => $maison?->id, 'day_of_week' => 6],
            ['slug' => 'maison-des-cultures', 'start_time' => '10:00', 'end_time' => '12:00', 'name' => 'Atelier Leon', 'is_active' => true, 'sort' => 2],
        );

        // Leon op school — a school traject (no fixed weekly slot).
        Atelier::updateOrCreate(
            ['type' => AtelierType::School->value, 'name' => 'Leon op school'],
            ['venue_id' => null, 'day_of_week' => null, 'start_time' => null, 'end_time' => null, 'is_active' => true, 'sort' => 10],
        );
    }
}
