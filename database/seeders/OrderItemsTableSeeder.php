<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;

class OrderItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::all();
        $orders = Order::all();

        foreach ($orders as $order) {
            $numItems = rand(1, 5);
            $total = 0;

            $usedProductIds = [];

            for ($i = 0; $i < $numItems; $i++) {
                // Avoid duplicate products in same order
                $product = $products->whereNotIn('id', $usedProductIds)->random();
                $usedProductIds[] = $product->id;

                $quantity = rand(1, 4);
                $price = $product->price;

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price_at_purchase' => $price,
                    'created_at' => $order->created_at,
                    'updated_at' => $order->updated_at,
                ]);

                $total += $price * $quantity;
            }

            // Update total_price in order
            $order->update(['total_price' => $total]);
        }
    }
}
