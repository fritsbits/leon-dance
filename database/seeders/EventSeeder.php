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
                'venue' => 'Pianofabriek',
                'practice_slug' => 'atelier-leon',
                'starts_at' => $base->copy()->addDays(2)->setTime(16, 0),
                'ends_at' => $base->copy()->addDays(2)->setTime(18, 0),
            ],
            [
                'type' => EventType::OpenAtelier,
                'title' => 'Atelier Leon x Mariage',
                'lead' => 'Seppe',
                'venue' => 'Maison des Cultures',
                'practice_slug' => 'atelier-leon',
                'starts_at' => $base->copy()->addDays(5)->setTime(10, 0),
                'ends_at' => $base->copy()->addDays(5)->setTime(12, 0),
            ],
            [
                'type' => EventType::Klas,
                'title' => 'Leon in de klas',
                'lead' => 'Stef',
                'venue' => 'Maison des Cultures',
                'practice_slug' => 'leon-op-school',
                'starts_at' => $base->copy()->addDays(3)->setTime(9, 30),
                'ends_at' => $base->copy()->addDays(3)->setTime(11, 30),
            ],
            [
                'type' => EventType::Klas,
                'title' => 'Mariage in de klas',
                'lead' => 'Kristin, Adnane',
                'venue' => 'BRONKS',
                'practice_slug' => 'leon-op-school',
                'project_slug' => 'mariage',
                'starts_at' => $base->copy()->addDays(1)->setTime(13, 30),
                'ends_at' => $base->copy()->addDays(1)->setTime(15, 0),
            ],
            [
                'type' => EventType::Repetitie,
                'title' => 'Atelier Mariage x MUS-E',
                'lead' => 'Adnane',
                'venue' => 'GBS Kameleon',
                'partners' => 'MUS-E',
                'project_slug' => 'mariage',
                'starts_at' => $base->copy()->addDays(1)->setTime(15, 30),
                'ends_at' => $base->copy()->addDays(1)->setTime(17, 0),
            ],
            [
                'type' => EventType::Repetitie,
                'title' => 'Atelier Mariage x Ketmet',
                'lead' => 'Seppe',
                'venue' => 'Cultureghem',
                'partners' => 'Ketmet',
                'project_slug' => 'mariage',
                'starts_at' => $base->copy()->addDays(2)->setTime(14, 0),
                'ends_at' => $base->copy()->addDays(2)->setTime(16, 0),
            ],
            // Voorstellingen per editie (real shows from leon.dance/mariage; the last is the
            // upcoming show for the invented open-call editie molenbeek-2026).
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue' => 'MolenFest, Molenbeek',
                'project_slug' => 'mariage',
                'editie_slug' => 'molenbeek-2024',
                'starts_at' => \Carbon\Carbon::create(2024, 9, 21, 14, 0),
                'ends_at' => \Carbon\Carbon::create(2024, 9, 21, 15, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue' => 'Week van de Verbeelding, Gaasbeek',
                'project_slug' => 'mariage',
                'editie_slug' => 'gaasbeek-2024',
                'starts_at' => \Carbon\Carbon::create(2024, 11, 2, 14, 0),
                'ends_at' => \Carbon\Carbon::create(2024, 11, 2, 15, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue' => 'MolenFest, Molenbeek',
                'project_slug' => 'mariage',
                'editie_slug' => 'molenbeek-2025',
                'starts_at' => \Carbon\Carbon::create(2025, 9, 6, 14, 0),
                'ends_at' => \Carbon\Carbon::create(2025, 9, 6, 15, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue' => 'Winterfeest GC De Platoo, Koekelberg',
                'project_slug' => 'mariage',
                'editie_slug' => 'koekelberg-2025',
                'starts_at' => \Carbon\Carbon::create(2025, 12, 19, 15, 0),
                'ends_at' => \Carbon\Carbon::create(2025, 12, 19, 16, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue' => 'Cultureghem, Anderlecht',
                'project_slug' => 'mariage',
                'editie_slug' => 'anderlecht-2026',
                'starts_at' => \Carbon\Carbon::create(2026, 4, 10, 19, 0),
                'ends_at' => \Carbon\Carbon::create(2026, 4, 10, 20, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue' => 'BRONKS, Brussel',
                'partners' => 'Volt FESTIVAL',
                'project_slug' => 'mariage',
                'editie_slug' => 'brussel-2026',
                'starts_at' => \Carbon\Carbon::create(2026, 4, 26, 15, 0),
                'ends_at' => \Carbon\Carbon::create(2026, 4, 26, 16, 0),
            ],
            [
                'type' => EventType::Voorstelling,
                'title' => 'Mariage',
                'lead' => 'Team Leon',
                'venue' => 'MolenFest, Molenbeek',
                'project_slug' => 'mariage',
                'editie_slug' => 'molenbeek-2026',
                'starts_at' => \Carbon\Carbon::create(2026, 9, 6, 14, 0),
                'ends_at' => \Carbon\Carbon::create(2026, 9, 6, 15, 0),
            ],
            [
                'type' => EventType::LeonRondDeTafel,
                'title' => 'Leon rond de tafel',
                'lead' => 'Team Leon',
                'venue' => 'Maison des Cultures',
                'starts_at' => $base->copy()->addDays(4)->setTime(10, 0),
                'ends_at' => $base->copy()->addDays(4)->setTime(12, 0),
            ],
        ];

        foreach ($rows as $row) {
            $venue = isset($row['venue']) ? Venue::where('name', $row['venue'])->first() : null;

            $atelierId = null;
            if ($row['type'] === EventType::OpenAtelier && $venue) {
                $atelierId = Atelier::open()->where('venue_id', $venue->id)->value('id');
            }

            Event::create([
                ...$row,
                'is_public' => true,
                'venue_id' => $venue?->id,
                'atelier_id' => $atelierId,
            ]);
        }
    }
}
