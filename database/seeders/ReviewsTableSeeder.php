<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Product;
use App\Models\Customer;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = Product::pluck('id')->toArray();
        $customers = Customer::pluck('id')->toArray();

        $sampleComments = [
            'Great Products',
            'Not what I expects, but Quality was good what I recieved',
            'Highly Recommended if you looking for organic one!',
            'will definately buy again!',
            'Pure waste of Money!',
            'আমি কিনলাম, অসাধারন। আপনারাও নিতে পারেন। ',
            'সেলার ও ডেলভারিম্যান অনেক ভালো । ধন্যবাদ গ্রীন বাস্কেট কে ',
            'ভালো লাগেনি তেমন ',
            'খারাপ না, চলে ',
            'এর থেকে কাচা বাজার থেকে নেয়াই ভালো ',
        ];

        for ($i = 0; $i < 300; $i++) {
            Review::create([
                'product_id' => $products[array_rand($products)],
                'customer_id' => $customers[array_rand($customers)],
                'rating' => rand(1, 5),
                'comment' => $sampleComments[array_rand($sampleComments)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
