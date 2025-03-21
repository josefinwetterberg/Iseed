<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\WhereToSow;
use App\Models\Season;
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

        // Skapa 10 kategorier, 5 såplatser och 4 säsonger
        Category::factory()->count(10)->create();
        /*  WhereToSow::factory()->count(5)->create();
        Season::factory()->count(4)->create(); */

        // Skapa 50 fröprodukter
        Seed::factory()->count(50)->create()->each(function ($seed) {
            // Koppla fröet till slumpmässiga kategorier
            $seed->categories()->attach(
                Category::inRandomOrder()->take(rand(1, 3))->pluck('id')
            );

            /*       // Koppla fröet till slumpmässiga såplatser
            $seed->whereToSow()->attach(
                WhereToSow::inRandomOrder()->take(rand(1, 2))->pluck('id')
            );

            // Koppla fröet till slumpmässiga säsonger med en action
            $seed->seasons()->attach(
                Season::inRandomOrder()->take(rand(1, 2))->pluck('id'),
                ['action' => 'sow']
            ); */
        });
    }
}
