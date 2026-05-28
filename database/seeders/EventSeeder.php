<?php

namespace Database\Seeders;

use App\Enums\EventType;
use App\Models\Atelier;
use App\Models\Event;
use App\Models\Venue;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $base = now()->startOfWeek()->addWeek();

        $rows = [
            [
                'type' => EventType::OpenAtelier,
                'title' => 'Atelier Leon',
                'lead' => 'Lena',
                'venue_name' =>'Pianofabriek',
                'starts_at' => $base->copy()->addDays(2)->setTime(16, 0),
                'ends_at' => $base->copy()->addDays(2)->setTime(18, 0),
            ],
            [
                'type' => EventType::OpenAtelier,
                'title' => 'Atelier Leon x Mariage',
                'lead' => 'Seppe',
                'venue_name' =>'Maison des Cultures',
                'starts_at' => $base->copy()->addDays(5)->setTime(10, 0),
                'ends_at' => $base->copy()->addDays(5)->setTime(12, 0),
            ],
            [
                'type' => EventType::Klas,
                'title' => 'Leon in de klas',
                'lead' => 'Stef',
                'venue_name' =>'Maison des Cultures',
                'starts_at' => $base->copy()->addDays(3)->setTime(9, 30),
                'ends_at' => $base->copy()->addDays(3)->setTime(11, 30),
            ],
            [
                'type' => EventType::Klas,
                'title' => 'Mariage in de klas',
                'lead' => 'Kristin, Adnane',
                'venue_name' =>'BRONKS',
                'starts_at' => $base->copy()->addDays(1)->setTime(13, 30),
                'ends_at' => $base->copy()->addDays(1)->setTime(15, 0),
            ],
            [
                'type' => EventType::Repetitie,
                'title' => 'Atelier Mariage x MUS-E',
                'lead' => 'Adnane',
                'venue_name' =>'GBS Kameleon',
                'partners' => 'MUS-E',
                '_edition_slug' => 'molenbeek-2026',
                'starts_at' => $base->copy()->addDays(1)->setTime(15, 30),
                'ends_at' => $base->copy()->addDays(1)->setTime(17, 0),
            ],
            [
                'type' => EventType::Repetitie,
                'title' => 'Atelier Mariage x Ketmet',
                'lead' => 'Seppe',
                'venue_name' =>'Cultureghem',
                'partners' => 'Ketmet',
                '_edition_slug' => 'molenbeek-2026',
                'starts_at' => $base->copy()->addDays(2)->setTime(14, 0),
                'ends_at' => $base->copy()->addDays(2)->setTime(16, 0),
            ],
            // Voorstellingen per editie (real shows from leon.dance/mariage; the last is the
            // upcoming show for the invented open-call editie molenbeek-2026).
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue_name' =>'MolenFest, Molenbeek',
                '_edition_slug' => 'molenbeek-2024',
                'starts_at' => \Carbon\Carbon::create(2024, 9, 21, 14, 0),
                'ends_at' => \Carbon\Carbon::create(2024, 9, 21, 15, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue_name' =>'Week van de Verbeelding, Gaasbeek',
                '_edition_slug' => 'gaasbeek-2024',
                'starts_at' => \Carbon\Carbon::create(2024, 11, 2, 14, 0),
                'ends_at' => \Carbon\Carbon::create(2024, 11, 2, 15, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue_name' =>'MolenFest, Molenbeek',
                '_edition_slug' => 'molenbeek-2025',
                'starts_at' => \Carbon\Carbon::create(2025, 9, 6, 14, 0),
                'ends_at' => \Carbon\Carbon::create(2025, 9, 6, 15, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue_name' =>'Winterfeest GC De Platoo, Koekelberg',
                '_edition_slug' => 'koekelberg-2025',
                'starts_at' => \Carbon\Carbon::create(2025, 12, 19, 15, 0),
                'ends_at' => \Carbon\Carbon::create(2025, 12, 19, 16, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue_name' =>'Cultureghem, Anderlecht',
                '_edition_slug' => 'anderlecht-2026',
                'starts_at' => \Carbon\Carbon::create(2026, 4, 10, 19, 0),
                'ends_at' => \Carbon\Carbon::create(2026, 4, 10, 20, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue_name' =>'BRONKS, Brussel',
                'partners' => 'Volt FESTIVAL',
                '_edition_slug' => 'brussel-2026',
                'starts_at' => \Carbon\Carbon::create(2026, 4, 26, 15, 0),
                'ends_at' => \Carbon\Carbon::create(2026, 4, 26, 16, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue_name' =>'MolenFest, Molenbeek',
                '_edition_slug' => 'molenbeek-2026',
                'starts_at' => \Carbon\Carbon::create(2026, 9, 6, 14, 0),
                'ends_at' => \Carbon\Carbon::create(2026, 9, 6, 15, 0),
            ],
            [
                'type' => EventType::LeonRondDeTafel,
                'title' => 'Leon rond de tafel',
                'lead' => 'Team Leon',
                'venue_name' =>'Maison des Cultures',
                'starts_at' => $base->copy()->addDays(4)->setTime(10, 0),
                'ends_at' => $base->copy()->addDays(4)->setTime(12, 0),
            ],
        ];

        foreach ($rows as $row) {
            $venue = isset($row['venue_name']) ? Venue::where('name', $row['venue_name'])->first() : null;

            $atelierId = null;
            if ($row['type'] === EventType::OpenAtelier && $venue) {
                $atelierId = Atelier::open()->where('venue_id', $venue->id)->value('id');
            } elseif ($row['type'] === EventType::Klas) {
                $atelierId = Atelier::school()->where('name', 'Leon op school')->value('id');
            }

            $editionSlug = $row['_edition_slug'] ?? null;
            unset($row['_edition_slug']);

            $editionId = $editionSlug
                ? \App\Models\Edition::where('slug', $editionSlug)->value('id')
                : null;

            Event::create([
                ...$row,
                'is_public' => true,
                'venue_id' => $venue?->id,
                'atelier_id' => $atelierId,
                'edition_id' => $editionId,
            ]);
        }
    }
}
