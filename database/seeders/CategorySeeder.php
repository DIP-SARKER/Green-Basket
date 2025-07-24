<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::insert([
            ['name' => 'Vegetables', 'description' => 'Fresh local and imported vegetables', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fruits', 'description' => 'Seasonal and exotic fruits', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Meat', 'description' => 'Beef, mutton, and poultry items', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fish', 'description' => 'Freshwater and sea fish, including Hilsa', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dairy', 'description' => 'Milk, yogurt, cheese, and butter', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spices', 'description' => 'Local and imported spices like turmeric, chili, and cumin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Snacks', 'description' => 'Ready-to-eat items like chanachur, biscuits, and chips', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bakery', 'description' => 'Bread, cakes, pastries, and baked goods', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beverages', 'description' => 'Juice, tea, coffee, and soft drinks', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Frozen Foods', 'description' => 'Frozen paratha, nuggets, and ready meals', 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}
