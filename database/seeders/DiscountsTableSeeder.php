<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('discounts')->insert([
            [
                'code' => 'POHELA23',
                'name' => 'Pohela Boishakh Offer',
                'discount_type' => 'percentage',
                'value' => 15.00,
                'start_date' => now()->subDays(10),
                'end_date' => now()->addDays(10),
                'usage_limit' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'EIDULAZHA50',
                'name' => 'Eid-ul-Azha Special Discount',
                'discount_type' => 'fixed',
                'value' => 500.00,
                'start_date' => now()->subDays(5),
                'end_date' => now()->addDays(20),
                'usage_limit' => 50,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'DHAKADEL20',
                'name' => 'Dhaka Delivery Discount',
                'discount_type' => 'percentage',
                'value' => 20.00,
                'start_date' => now(),
                'end_date' => now()->addDays(30),
                'usage_limit' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
