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

        $seeds = [
            ['name' => 'Sunflower', 'description' => 'Bright yellow flowers that follow the sun.', 'annuality' => 'Annual', 'height_cm' => 150, 'color' => 'Yellow', 'image' => 'https://images.unsplash.com/photo-1597848212624-a19eb35e2651?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c3VuZmxvd2VyfGVufDB8fDB8fHwy', 'price_sek' => 39, 'seed_count' => 50, 'organic' => true, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Lavender', 'description' => 'Fragrant purple flowers with calming properties.', 'annuality' => 'Perennial', 'height_cm' => 60, 'color' => 'Purple', 'image' => 'https://images.unsplash.com/photo-1445510491599-c391e8046a68?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'price_sek' => 45, 'seed_count' => 100, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Basil', 'description' => 'Aromatic herb perfect for Italian dishes.', 'annuality' => 'Annual', 'height_cm' => 30, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1629157247277-48f870757026?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'price_sek' => 29, 'seed_count' => 200, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Tomato', 'description' => 'Classic Italian tomato, ideal for sauces.', 'annuality' => 'Annual', 'height_cm' => 90, 'color' => 'Red', 'image' => 'https://images.unsplash.com/photo-1607305387299-a3d9611cd469?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'price_sek' => 35, 'seed_count' => 40, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Carrot', 'description' => 'Sweet and crisp carrot variety.', 'annuality' => 'Biennial', 'height_cm' => 30, 'color' => 'Orange', 'image' => 'https://images.unsplash.com/photo-1579584828095-494884160804?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNhcnJvdHxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 25, 'seed_count' => 300, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Rose', 'description' => 'Beautiful and fragrant flowering plant.', 'annuality' => 'Perennial', 'height_cm' => 100, 'color' => 'Red', 'image' => 'https://images.unsplash.com/photo-1496062031456-07b8f162a322?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cm9zZXxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 59, 'seed_count' => 30, 'organic' => false, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Chili Jalapeño', 'description' => 'Spicy green peppers for salsas.', 'annuality' => 'Annual', 'height_cm' => 80, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1597115580039-b849ed2d6398?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8amFsYXBlbm98ZW58MHx8MHx8fDI%3D', 'price_sek' => 39, 'seed_count' => 60, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Mint', 'description' => 'Cooling herb perfect for teas and cocktails.', 'annuality' => 'Perennial', 'height_cm' => 40, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1582556135623-653b87486f21?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bWludHxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 29, 'seed_count' => 150, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Pumpkin', 'description' => 'Large orange fruit for pies and carving.', 'annuality' => 'Annual', 'height_cm' => 45, 'color' => 'Orange', 'image' => 'https://images.unsplash.com/photo-1566220036246-08bc2fc902a6?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cHVtcGtpbnxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 49, 'seed_count' => 20, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Marigold', 'description' => 'Bright and hardy flower for gardens.', 'annuality' => 'Annual', 'height_cm' => 50, 'color' => 'Orange', 'image' => 'https://images.unsplash.com/photo-1620005807545-2e08850d6591?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFyaWdvbGR8ZW58MHx8MHx8fDI%3D', 'price_sek' => 35, 'seed_count' => 100, 'organic' => true, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Oregano', 'description' => 'Essential for Mediterranean cuisine.', 'annuality' => 'Perennial', 'height_cm' => 40, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1585255750531-b041f0c8127c?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8b3JlZ2Fub3xlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 27, 'seed_count' => 100, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Cucumber', 'description' => 'Cool and refreshing for salads.', 'annuality' => 'Annual', 'height_cm' => 30, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1518568403628-df55701ade9e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y3VjdW1iZXJ8ZW58MHx8MHx8fDI%3D', 'price_sek' => 34, 'seed_count' => 50, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Watermelon', 'description' => 'Juicy and refreshing summer fruit.', 'annuality' => 'Annual', 'height_cm' => 40, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8d2F0ZXJtZWxvbnxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 55, 'seed_count' => 25, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Strawberry', 'description' => 'Sweet red berries.', 'annuality' => 'Perennial', 'height_cm' => 25, 'color' => 'Red', 'image' => 'https://images.unsplash.com/photo-1588165171080-c89acfa5ee83?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c3RyYXdiZXJyeSUyMHBsYW50fGVufDB8fDB8fHwy', 'price_sek' => 49, 'seed_count' => 30, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Parsley', 'description' => 'Common herb for seasoning.', 'annuality' => 'Biennial', 'height_cm' => 25, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1588879460618-9249e7d947d1?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGFyc2xleXxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 19, 'seed_count' => 250, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Zucchini', 'description' => 'Versatile vegetable for cooking.', 'annuality' => 'Annual', 'height_cm' => 45, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1601906451998-bb5e51856e45?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHp1Y2NoaW5pfGVufDB8fDB8fHwy', 'price_sek' => 38, 'seed_count' => 40, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Lettuce', 'description' => 'Essential for fresh salads.', 'annuality' => 'Annual', 'height_cm' => 25, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1556781366-336f8353ba7c?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bGV0dHVjZXxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 22, 'seed_count' => 500, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Chamomile', 'description' => 'Used for calming tea.', 'annuality' => 'Annual', 'height_cm' => 40, 'color' => 'White', 'image' => 'https://images.unsplash.com/photo-1602083494000-368536110193?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2hhbW9taWxlfGVufDB8fDB8fHwy', 'price_sek' => 30, 'seed_count' => 100, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Daisy', 'description' => 'Simple and cheerful white flowers.', 'annuality' => 'Perennial', 'height_cm' => 35, 'color' => 'White', 'image' => 'https://images.unsplash.com/photo-1560717789-0ac7c58ac90a?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZGFpc3l8ZW58MHx8MHx8fDI%3D', 'price_sek' => 29, 'seed_count' => 80, 'organic' => true, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Bell Pepper', 'description' => 'Sweet and colorful peppers.', 'annuality' => 'Annual', 'height_cm' => 60, 'color' => 'Red', 'image' => 'https://images.unsplash.com/photo-1604488943825-f95dc6796ca5?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YmVsbCUyMHBlcHBlciUyMHBsYW50fGVufDB8fDB8fHwy', 'price_sek' => 40, 'seed_count' => 50, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Dill', 'description' => 'Aromatic herb used in pickling.', 'annuality' => 'Annual', 'height_cm' => 45, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1455881545252-dd7edc8e41d2?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZGlsbHxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 20, 'seed_count' => 300, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Thyme', 'description' => 'Earthy herb great for roasts.', 'annuality' => 'Perennial', 'height_cm' => 30, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1606072104299-cdaab62c0a07?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8dGh5bWV8ZW58MHx8MHx8fDI%3D', 'price_sek' => 28, 'seed_count' => 150, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Rosemary', 'description' => 'Woody herb with a piney scent.', 'annuality' => 'Perennial', 'height_cm' => 70, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1582745741856-1a5d68158ba3?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cm9zZW1hcnknfGVufDB8fDB8fHwy', 'price_sek' => 33, 'seed_count' => 120, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Pea', 'description' => 'Sweet green pods full of flavor.', 'annuality' => 'Annual', 'height_cm' => 80, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1611511449923-b179ddc69119?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGVhfGVufDB8fDB8fHwy', 'price_sek' => 27, 'seed_count' => 60, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Broccoli', 'description' => 'Nutritious and packed with vitamins.', 'annuality' => 'Annual', 'height_cm' => 50, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1617122823297-5d390e6074b3?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YnJvY2NvbGklMjBwbGFudHxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 39, 'seed_count' => 80, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Spinach', 'description' => 'Iron-rich leafy green.', 'annuality' => 'Annual', 'height_cm' => 25, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1598278242809-6c21ee17aef1?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHNwaW5hY2h8ZW58MHx8MHx8fDI%3D', 'price_sek' => 22, 'seed_count' => 500, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Celery', 'description' => 'Crunchy vegetable great for soups.', 'annuality' => 'Biennial', 'height_cm' => 60, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1676265744694-4b4eaa3feebf?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNlbGVyeSUyMHBsYW50fGVufDB8fDB8fHwy', 'price_sek' => 30, 'seed_count' => 100, 'organic' => false, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Radish', 'description' => 'Crisp, spicy root vegetable.', 'annuality' => 'Annual', 'height_cm' => 20, 'color' => 'Red', 'image' => 'https://images.unsplash.com/photo-1587482990911-773a2aef47dc?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHJhZGlzaHxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 25, 'seed_count' => 150, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Kale', 'description' => 'Superfood rich in nutrients.', 'annuality' => 'Biennial', 'height_cm' => 40, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGthbGV8ZW58MHx8MHx8fDI%3D', 'price_sek' => 28, 'seed_count' => 80, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Arugula', 'description' => 'Peppery salad green.', 'annuality' => 'Annual', 'height_cm' => 25, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1621664270515-0a497de945a3?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXJ1Z3VsYXxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 20, 'seed_count' => 400, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1],
            ['name' => 'Bluebell', 'description' => 'Delicate blue flowers.', 'annuality' => 'Perennial', 'height_cm' => 35, 'color' => 'Blue', 'image' => 'https://images.unsplash.com/photo-1509719662282-b82bed65a96b?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Ymx1ZWJlbGx8ZW58MHx8MHx8fDI%3D', 'price_sek' => 45, 'seed_count' => 40, 'organic' => false, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Poppy', 'description' => 'Striking red flowers with black centers.', 'annuality' => 'Annual', 'height_cm' => 60, 'color' => 'Red', 'image' => 'https://images.unsplash.com/photo-1594931876611-4edab4b90ade?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cG9wcHl8ZW58MHx8MHx8fDI%3D', 'price_sek' => 32, 'seed_count' => 100, 'organic' => true, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Snapdragon', 'description' => 'Colorful and long-blooming.', 'annuality' => 'Annual', 'height_cm' => 50, 'color' => 'Mixed', 'image' => 'https://images.unsplash.com/photo-1586412890730-f537ecda1e29?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8c25hcGRyYWdvbnxlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 38, 'seed_count' => 100, 'organic' => true, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Forget-me-not', 'description' => 'Tiny blue flowers symbolizing remembrance.', 'annuality' => 'Biennial', 'height_cm' => 30, 'color' => 'Blue', 'image' => 'https://images.unsplash.com/photo-1590231022380-811ce7110775?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Zm9yZ2V0JTIwbWUlMjBub3R8ZW58MHx8MHx8fDI%3D', 'price_sek' => 35, 'seed_count' => 150, 'organic' => true, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Foxglove', 'description' => 'Tall spires of pink-purple flowers.', 'annuality' => 'Biennial', 'height_cm' => 120, 'color' => 'Purple', 'image' => 'https://images.unsplash.com/photo-1531168948622-c3d9f1d97771?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Zm94Z2xvdmV8ZW58MHx8MHx8fDI%3D', 'price_sek' => 50, 'seed_count' => 80, 'organic' => false, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Hollyhock', 'description' => 'Tall, dramatic flowers for gardens.', 'annuality' => 'Perennial', 'height_cm' => 200, 'color' => 'Mixed', 'image' => 'https://images.unsplash.com/photo-1693857033852-b070f4355bdf?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGhvbGx5aG9ja3xlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 55, 'seed_count' => 50, 'organic' => false, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Cornflower', 'description' => 'Bright blue wildflower.', 'annuality' => 'Annual', 'height_cm' => 60, 'color' => 'Blue', 'image' => 'https://images.unsplash.com/photo-1596363770499-38a9a2e22605?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGNvcm5mbG93ZXJ8ZW58MHx8MHx8fDI%3D', 'price_sek' => 37, 'seed_count' => 90, 'organic' => true, 'category' => 'Flowers', 'user_id' => 1],
            ['name' => 'Chives', 'description' => 'Mild onion-flavored herb.', 'annuality' => 'Perennial', 'height_cm' => 30, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1562091668-cd20c2abe700?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGNoaXZlc3xlbnwwfHwwfHx8Mg%3D%3D', 'price_sek' => 24, 'seed_count' => 150, 'organic' => true, 'category' => 'Herbs', 'user_id' => 1],
            ['name' => 'Leek', 'description' => 'Mild onion-like vegetable.', 'annuality' => 'Biennial', 'height_cm' => 75, 'color' => 'Green', 'image' => 'https://images.unsplash.com/photo-1599776764145-bcc16b4e3815?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGxlZWslMjBnYXJkZW58ZW58MHx8MHx8fDI%3D', 'price_sek' => 28, 'seed_count' => 100, 'organic' => true, 'category' => 'Vegetables', 'user_id' => 1]
        ];

        // Insert seeds into the database
        foreach ($seeds as $seed) {
            $seedModel = Seed::create([
                'name' => $seed['name'],
                'description' => $seed['description'],
                'annuality' => $seed['annuality'],
                'height_cm' => $seed['height_cm'],
                'color' => $seed['color'],
                'image' => $seed['image'],
                'price_sek' => $seed['price_sek'],
                'seed_count' => $seed['seed_count'],
                'organic' => $seed['organic'],
                'user_id' => $seed['user_id'],
            ]);

            $category = Category::where('name', $seed['category'])->first();
            if ($category) {
                $seedModel->categories()->attach($category->id);
            }
        }

        /* 
        // Skapa 50 fröprodukter
        Seed::factory()->count(50)->create()->each(function ($seed) {
            // Koppla fröet till slumpmässiga kategorier
            $seed->categories()->attach(
                Category::inRandomOrder()->take(rand(1, 3))->pluck('id')
            );
        }); */
    }
}
