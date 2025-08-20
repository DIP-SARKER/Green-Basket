<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;

class OrdersTableSeeder extends Seeder
{
    public function run(): void
    {
        $customerIds = Customer::pluck('id')->toArray();
        $statuses = ['pending', 'paid', 'shipped', 'delivered', 'cancelled'];
        // Generate 50 random orders
        for ($i = 0; $i < 10; $i++) {
            Order::create([
                'customer_id' => $customerIds[array_rand($customerIds)],
                'total_price' => 0, // will be updated after order items are seeded
                'status' => $statuses[array_rand($statuses)],
                'created_at' => now()->subDays(rand(1, 90)),
                'updated_at' => now(),
            ]);
        }
    }
}
