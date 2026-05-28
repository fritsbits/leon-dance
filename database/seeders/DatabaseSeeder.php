<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // EventSeeder is intentionally NOT called here — it is not idempotent (plain inserts),
        // so it is run manually: `php artisan db:seed --class=EventSeeder`.
        $this->call([
            ProjectSeeder::class,
            EditionSeeder::class,
            VenueSeeder::class,
            AtelierSeeder::class,
        ]);
    }
}
