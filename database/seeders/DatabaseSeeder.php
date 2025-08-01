<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            SellersTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            CustomersTableSeeder::class,
            AdminsTableSeeder::class,
            DiscountsTableSeeder::class,
            ReviewsTableSeeder::class,
            SupportTicketTableSeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
