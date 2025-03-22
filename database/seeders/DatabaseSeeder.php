<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Seed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password123')
        ]);

        // Create specific categories
        $categories = [
            ['name' => 'Flowers'],
            ['name' => 'Herbs'],
            ['name' => 'Vegetables']
        ];

        // Insert categories into the database
        foreach ($categories as $category) {
            Category::create($category);
        }

        // Skapa 50 fröprodukter
        Seed::factory()->count(50)->create()->each(function ($seed) {
            // Koppla fröet till slumpmässiga kategorier
            $seed->categories()->attach(
                Category::inRandomOrder()->take(rand(1, 3))->pluck('id')
            );
        });
    }
}
