<?php

namespace Database\Seeders;

use App\Models\Editie;
use Illuminate\Database\Seeder;

class EditieSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'slug' => 'brussel-2024', 'stad' => 'Brussel', 'jaar' => 2024,
                'stadgenoot' => 'Brusselaars', 'periode' => 'maart – mei 2024',
                'starts_at' => '2024-03-01', 'ends_at' => '2024-05-31',
                'partner' => 'KVS · Maison des Cultures · Pianofabriek',
                'locaties' => 'Repetities in Cultureghem · voorstellingen in KVS, Maison des Cultures en Pianofabriek.',
                'groep_size' => 'twintig', 'groep_age' => '18 en 67',
                'groep_prose_intro' => 'Een groep van twintig Brusselaars tussen 18 en 67 vormde de lokale cast van deze editie. Ze werden samengesteld via een open call in het voorjaar van 2024, na drie kennismakingsmomenten in Cultureghem. Tien weken lang repeteerden ze elke woensdag samen met de kerngroep van Leon, naar de première in KVS toe.',
                'quote' => 'Ik kan er mezelf zijn en ik ontmoet mensen die ik anders nooit zou tegenkomen.',
                'quote_attr' => 'Hadja, 67 · Mariage Brussel 2024',
                'inschrijving_open' => false, 'inschrijving_closes_at' => null,
            ],
            [
                'slug' => 'antwerpen-2024', 'stad' => 'Antwerpen', 'jaar' => 2024,
                'stadgenoot' => 'Antwerpenaars', 'periode' => 'sep – dec 2024',
                'starts_at' => '2024-09-01', 'ends_at' => '2024-12-15',
                'partner' => '[partner — te bevestigen]', 'locaties' => '[locaties — te bevestigen]',
                'groep_size' => '[~aantal]', 'groep_age' => '[leeftijd-min] en [leeftijd-max]',
                'groep_prose_intro' => null, 'quote' => null, 'quote_attr' => null,
                'inschrijving_open' => false, 'inschrijving_closes_at' => null,
            ],
            [
                'slug' => 'rotterdam-2025', 'stad' => 'Rotterdam', 'jaar' => 2025,
                'stadgenoot' => 'Rotterdammers', 'periode' => 'jan – apr 2025',
                'starts_at' => '2025-01-15', 'ends_at' => '2025-04-30',
                'partner' => '[partner — te bevestigen]', 'locaties' => '[locaties — te bevestigen]',
                'groep_size' => '[~aantal]', 'groep_age' => '[leeftijd-min] en [leeftijd-max]',
                'groep_prose_intro' => null, 'quote' => null, 'quote_attr' => null,
                'inschrijving_open' => false, 'inschrijving_closes_at' => null,
            ],
            [
                'slug' => 'gent-2025', 'stad' => 'Gent', 'jaar' => 2025,
                'stadgenoot' => 'Gentenaars', 'periode' => 'mrt – jun 2025',
                'starts_at' => '2025-03-15', 'ends_at' => '2025-06-30',
                'partner' => '[partner — te bevestigen]', 'locaties' => '[locaties — te bevestigen]',
                'groep_size' => '[~aantal]', 'groep_age' => '[leeftijd-min] en [leeftijd-max]',
                'groep_prose_intro' => null, 'quote' => null, 'quote_attr' => null,
                'inschrijving_open' => false, 'inschrijving_closes_at' => null,
            ],
            [
                'slug' => 'marseille-2025', 'stad' => 'Marseille', 'jaar' => 2025,
                'stadgenoot' => 'Marseillais', 'periode' => 'sep – dec 2025',
                'starts_at' => '2025-09-01', 'ends_at' => '2025-12-15',
                'partner' => '[partner — te bevestigen]', 'locaties' => '[locaties — te bevestigen]',
                'groep_size' => '[~aantal]', 'groep_age' => '[leeftijd-min] en [leeftijd-max]',
                'groep_prose_intro' => null, 'quote' => null, 'quote_attr' => null,
                'inschrijving_open' => false, 'inschrijving_closes_at' => null,
            ],
            [
                'slug' => 'luik-2026', 'stad' => 'Luik', 'jaar' => 2026,
                'stadgenoot' => 'Luikenaars', 'periode' => 'juni – december 2026',
                'starts_at' => '2026-06-01', 'ends_at' => '2026-12-15',
                'partner' => '[partner — te bevestigen]', 'locaties' => '[locaties — te bevestigen]',
                'groep_size' => '[~aantal]', 'groep_age' => '[leeftijd-min] en [leeftijd-max]',
                'groep_prose_intro' => null, 'quote' => null, 'quote_attr' => null,
                // Live demo: the open call is on, no public deadline (toggle-only).
                'inschrijving_open' => true, 'inschrijving_closes_at' => null,
            ],
        ];

        foreach ($rows as $row) {
            Editie::updateOrCreate(
                ['slug' => $row['slug']],
                array_merge(['project_slug' => 'mariage'], $row),
            );
        }
    }
}
