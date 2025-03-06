<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Seed;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seed>
 */
class SeedFactory extends Factory
{
    protected $model = Seed::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'annuality' => $this->faker->randomElement(['annual', 'perennial', 'biennial']),
            'height_cm' => $this->faker->numberBetween(10, 200),
            'color' => $this->faker->safeColorName(),
            'image' => $this->faker->imageUrl(200, 200, 'plants'),
            'price_sek' => $this->faker->numberBetween(20, 100),
            'seed_count' => $this->faker->numberBetween(10, 100),
            'organic' => $this->faker->boolean(),
            'user_id' => \App\Models\User::factory(), // Kopplar till en användare
        ];
    }
}
