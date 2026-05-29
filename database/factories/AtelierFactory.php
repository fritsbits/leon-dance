<?php

namespace Database\Factories;

use App\Enums\AtelierType;
use App\Models\Atelier;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Atelier> */
class AtelierFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type' => AtelierType::Open->value,
            'venue_id' => Venue::factory(),
            'slug' => fake()->unique()->slug(2),
            'day_of_week' => fake()->numberBetween(1, 7),
            'start_time' => '16:00',
            'end_time' => '18:00',
            'is_active' => true,
            'sort' => 0,
        ];
    }

    public function open(): static
    {
        return $this->state(['type' => AtelierType::Open->value]);
    }

    public function school(): static
    {
        return $this->state(['type' => AtelierType::School->value]);
    }
}
