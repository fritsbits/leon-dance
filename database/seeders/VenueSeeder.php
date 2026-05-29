<?php

namespace Database\Seeders;

use App\Models\Venue;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    public function run(): void
    {
        // lat/lng are approximate (geocoded from the address) — confirm with the team
        // before Surface. Used by the open-atelier detail page's OSM map.
        $venues = [
            ['name' => 'Pianofabriek', 'area' => 'Sint-Gillis', 'address' => 'Fortstraat 35, 1060 Sint-Gillis', 'lat' => 50.8282, 'lng' => 4.3423],
            ['name' => 'Maison des Cultures', 'area' => 'Molenbeek', 'address' => 'Mommaertsstraat 4, 1080 Molenbeek', 'lat' => 50.8556, 'lng' => 4.3389],
            ['name' => 'BRONKS', 'area' => 'Brussel'],
            ['name' => 'GBS Kameleon'],
            ['name' => 'Cultureghem', 'area' => 'Anderlecht'],
        ];

        foreach ($venues as $venue) {
            Venue::updateOrCreate(['name' => $venue['name']], $venue);
        }
    }
}
