<?php


use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = ['pending', 'paid', 'shipped', 'delivered'];

        $customers = Customer::all();

        foreach ($customers as $customer) {
            for ($i = 0; $i < rand(2, 5); $i++) {
                Order::create([
                    'customer_id' => $customer->id,
                    'total_price' => rand(500, 5000) + (rand(0, 99) / 100),
                    'transaction_id' => \Illuminate\Support\Str::uuid(),
                    'status' => $statuses[array_rand($statuses)],
                ]);
            }
        }
    }
}
