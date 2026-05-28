<?php

namespace Database\Seeders;

use App\Models\Venue;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    public function run(): void
    {
        $venues = [
            ['name' => 'Pianofabriek', 'area' => 'Sint-Gillis', 'address' => 'Fortstraat 35, 1060 Sint-Gillis'],
            ['name' => 'Maison des Cultures', 'area' => 'Molenbeek', 'address' => 'Mommaertsstraat 4, 1080 Molenbeek'],
            ['name' => 'BRONKS', 'area' => 'Brussel'],
            ['name' => 'GBS Kameleon'],
            ['name' => 'Cultureghem', 'area' => 'Anderlecht'],
        ];

        foreach ($venues as $venue) {
            Venue::updateOrCreate(['name' => $venue['name']], $venue);
        }
    }
}
