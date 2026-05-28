<?php

namespace Database\Seeders;

use App\Models\Edition;
use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
{
    public function run(): void
    {
        // Real Mariage editions, from the "Previous editions" list on leon.dance/mariage
        // (docs/raw/current-site/pages/mariage.md, captured 2026-05-19). Mariage is a
        // recurring participatory street performance shown at festivals and neighbourhood
        // feasts, not a multi-month city residency — so the group/quote fields stay null
        // until the team supplies real per-editie material. The last row is an invented
        // future editie so the open-call sign-up flow can be tested.
        $rows = [
            [
                'slug' => 'molenbeek-2024', 'stad' => 'Molenbeek', 'jaar' => 2024,
                'periode' => '21 september 2024',
                'starts_at' => '2024-09-21', 'ends_at' => '2024-09-21',
                'partner' => 'MOLENFEST · Molenbeek for Brussels 2030 · KANAL - Centre Pompidou',
                'locaties' => 'MolenFest 2024, Molenbeek',
            ],
            [
                'slug' => 'gaasbeek-2024', 'stad' => 'Gaasbeek', 'jaar' => 2024,
                'periode' => '2 november 2024',
                'starts_at' => '2024-11-02', 'ends_at' => '2024-11-02',
                'partner' => 'Week van de Verbeelding',
                'locaties' => 'Week van de Verbeelding, Gaasbeek',
            ],
            [
                'slug' => 'molenbeek-2025', 'stad' => 'Molenbeek', 'jaar' => 2025,
                'periode' => '6 september 2025',
                'starts_at' => '2025-09-06', 'ends_at' => '2025-09-06',
                'partner' => 'MOLENFEST · Molenbeek for Brussels 2030',
                'locaties' => 'MolenFest 2025, Molenbeek',
            ],
            [
                'slug' => 'koekelberg-2025', 'stad' => 'Koekelberg', 'jaar' => 2025,
                'periode' => '19 december 2025',
                'starts_at' => '2025-12-19', 'ends_at' => '2025-12-19',
                'partner' => 'GC De Platoo',
                'locaties' => 'Winterfeest, GC De Platoo, Koekelberg',
            ],
            [
                'slug' => 'anderlecht-2026', 'stad' => 'Anderlecht', 'jaar' => 2026,
                'periode' => '10 april 2026',
                'starts_at' => '2026-04-10', 'ends_at' => '2026-04-10',
                'partner' => 'Cultureghem',
                'locaties' => 'Cultureghem, Anderlecht',
            ],
            [
                'slug' => 'brussel-2026', 'stad' => 'Brussel', 'jaar' => 2026,
                'periode' => '26 april 2026',
                'starts_at' => '2026-04-26', 'ends_at' => '2026-04-26',
                'partner' => 'Volt FESTIVAL · BRONKS',
                'locaties' => 'Volt FESTIVAL, BRONKS, Brussel',
            ],
            [
                // Invented future editie · open call live so the sign-up flow is testable.
                'slug' => 'molenbeek-2026', 'stad' => 'Molenbeek', 'jaar' => 2026,
                'periode' => '6 september 2026',
                'starts_at' => '2026-09-06', 'ends_at' => '2026-09-06',
                'partner' => 'MOLENFEST · Molenbeek for Brussels 2030',
                'locaties' => 'MolenFest 2026, Molenbeek',
                'inschrijving_open' => true, 'inschrijving_closes_at' => '2026-08-30',
            ],
        ];

        foreach ($rows as $row) {
            Edition::updateOrCreate(
                ['slug' => $row['slug']],
                array_merge(['project_slug' => 'mariage'], $row),
            );
        }

        // Prune editions removed from the list above (keeps re-seeds idempotent).
        Edition::where('project_slug', 'mariage')
            ->whereNotIn('slug', array_column($rows, 'slug'))
            ->delete();
    }
}
