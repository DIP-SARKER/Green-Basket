<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupportTicket;
use Illuminate\Support\Str;

class SupportTicketTableSeeder extends Seeder
{
    public function run(): void
    {
        SupportTicket::insert([
            [
                'customer_id' => 1,
                'ticket_id' => 'TKT-7841',
                'subject' => 'পণ্য এখনো পৌঁছায়নি',
                'priority' => 'high',
                'status' => 'open',
                'customer_name' => 'সারাহ জনসন',
                'customer_image' => 'https://randomuser.me/api/portraits/women/32.jpg',
                'order_id' => 'ORD-7841',
                'tag' => 'শিপিং সমস্যা',
                'excerpt' => "আমার অর্ডার #ORD-7841 গতকাল পৌঁছানোর কথা ছিল, কিন্তু এখনো আসেনি।",
                'full_message' => "হ্যালো, আমার অর্ডার #ORD-7841 গতকাল ডেলিভারি হওয়ার কথা ছিল, কিন্তু এখনো পাইনি। দয়া করে দ্রুত বিষয়টি দেখুন।",
                'submitted_at' => now()->subHours(2),
            ],
            [
                'customer_id' => 2,
                'ticket_id' => 'TKT-7839',
                'subject' => 'পণ্যের গুণগত মান খারাপ',
                'priority' => 'medium',
                'status' => 'pending',
                'customer_name' => 'মাইকেল ব্রাউন',
                'customer_image' => 'https://randomuser.me/api/portraits/men/22.jpg',
                'order_id' => null,
                'tag' => 'পণ্যের সমস্যা',
                'excerpt' => "আমার কেনা আমগুলো পাকা ছিল না এবং কিছু নষ্ট ছিল।",
                'full_message' => "আমি যেসব আম পেয়েছি, সেগুলোর কিছু পাকা ছিল না এবং কয়েকটি নষ্ট। অনুগ্রহ করে এর সমাধান করুন অথবা রিফান্ড দিন।",
                'submitted_at' => now()->subHours(5),
            ],
            [
                'customer_id' => 3,
                'ticket_id' => 'TKT-7835',
                'subject' => 'ভুল পণ্য ডেলিভারি',
                'priority' => 'medium',
                'status' => 'open',
                'customer_name' => 'রাশিদ আহমেদ',
                'customer_image' => 'https://randomuser.me/api/portraits/men/36.jpg',
                'order_id' => 'ORD-7835',
                'tag' => 'ভুল পণ্য',
                'excerpt' => "আমি ৫ কেজি চাল অর্ডার করেছিলাম, কিন্তু ২ কেজি ডাল পেয়েছি।",
                'full_message' => "আমি অর্ডারে ৫ কেজি মিনিকেট চাল চেয়েছিলাম, অথচ ডেলিভারিতে ২ কেজি মসুর ডাল এসেছে। দ্রুত ঠিক করে দিন।",
                'submitted_at' => now()->subHours(9),
            ],
            [
                'customer_id' => 4,
                'ticket_id' => 'TKT-7831',
                'subject' => 'রিফান্ড এখনো পাইনি',
                'priority' => 'high',
                'status' => 'pending',
                'customer_name' => 'নুসরাত জাহান',
                'customer_image' => 'https://randomuser.me/api/portraits/women/45.jpg',
                'order_id' => 'ORD-7831',
                'tag' => 'রিফান্ড বিলম্ব',
                'excerpt' => "অর্ডার বাতিল করার পরে এখনো রিফান্ড পাইনি।",
                'full_message' => "আমি গত সপ্তাহে ORD-7831 বাতিল করেছি। বলা হয়েছিল ৩ দিনের মধ্যে টাকা ফেরত আসবে। এখনো পাইনি।",
                'submitted_at' => now()->subDays(1),
            ],
            [
                'customer_id' => 5,
                'ticket_id' => 'TKT-7825',
                'subject' => 'অর্ডার ট্র্যাকিং কাজ করছে না',
                'priority' => 'low',
                'status' => 'open',
                'customer_name' => 'তাহমিদ ইসলাম',
                'customer_image' => 'https://randomuser.me/api/portraits/men/50.jpg',
                'order_id' => 'ORD-7825',
                'tag' => 'ট্র্যাকিং সমস্যা',
                'excerpt' => "আমার অর্ডারের ট্র্যাকিং লিঙ্ক কাজ করছে না।",
                'full_message' => "ORD-7825 এর ট্র্যাকিং লিঙ্কে ক্লিক করলে ‘পেইজ পাওয়া যায়নি’ দেখায়। অনুগ্রহ করে লিঙ্কটি ঠিক করুন।",
                'submitted_at' => now()->subHours(6),
            ],
            // Add more sample data...
        ]);
    }
}

