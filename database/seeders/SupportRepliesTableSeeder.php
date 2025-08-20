<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SupportRepliesTableSeeder extends Seeder
{
    public function run(): void
    {
        // Sample replies for demonstration
        DB::table('support_replies')->insert([
            [
                'support_ticket_id' => 1,
                'message' => 'হ্যালো সারাহ, আমরা আপনার অর্ডার সমস্যাটি যাচাই করছি। শীঘ্রই আপডেট জানানো হবে।',
                'sender_type' => 'admin',
                'created_at' => now()->subHours(1),
                'updated_at' => now()->subHours(1),
            ],
            [
                'support_ticket_id' => 1,
                'message' => 'ধন্যবাদ, আমি অপেক্ষা করব।',
                'sender_type' => 'customer',
                'created_at' => now()->subMinutes(50),
                'updated_at' => now()->subMinutes(50),
            ],
            [
                'support_ticket_id' => 2,
                'message' => 'আপনি যে পণ্যটি ফেরত দিতে চান, অনুগ্রহ করে রিটার্ন প্রক্রিয়া সম্পন্ন করুন।',
                'sender_type' => 'admin',
                'created_at' => now()->subHours(4),
                'updated_at' => now()->subHours(4),
            ],
            [
                'support_ticket_id' => 2,
                'message' => 'ঠিক আছে, রিটার্ন প্রক্রিয়া শুরু করলাম।',
                'sender_type' => 'customer',
                'created_at' => now()->subHours(3)->subMinutes(30),
                'updated_at' => now()->subHours(3)->subMinutes(30),
            ],
            [
                'support_ticket_id' => 3,
                'message' => 'ভুল পণ্যের জন্য আমরা আন্তরিকভাবে ক্ষমা প্রার্থনা করছি। শীঘ্রই সঠিক পণ্য পাঠানো হবে।',
                'sender_type' => 'admin',
                'created_at' => now()->subHours(8),
                'updated_at' => now()->subHours(8),
            ],
            [
                'support_ticket_id' => 4,
                'message' => 'আপনার রিফান্ড প্রক্রিয়াকরণ চলছে। ২-৩ দিনের মধ্যে টাকা ফেরত আসবে।',
                'sender_type' => 'admin',
                'created_at' => now()->subHours(20),
                'updated_at' => now()->subHours(20),
            ],
            [
                'support_ticket_id' => 5,
                'message' => 'ট্র্যাকিং লিঙ্ক ঠিক করা হয়েছে। এখন থেকে কাজ করবে।',
                'sender_type' => 'admin',
                'created_at' => now()->subHours(5),
                'updated_at' => now()->subHours(5),
            ],
        ]);
    }
}
