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
                'subject' => 'Order Not Delivered',
                'priority' => 'high',
                'status' => 'open',
                'customer_name' => 'Sarah Johnson',
                'customer_image' => 'https://randomuser.me/api/portraits/women/32.jpg',
                'order_id' => 'ORD-7841',
                'tag' => 'Shipping Issue',
                'excerpt' => "My order #ORD-7841 was supposed to be delivered yesterday but hasn't arrived.",
                'full_message' => "Hello, My order #ORD-7841 was scheduled for delivery yesterday... [trimmed for brevity]",
                'submitted_at' => now()->subHours(2),
            ],
            [
                'customer_id' => 2,
                'ticket_id' => 'TKT-7839',
                'subject' => 'Product Quality Issue',
                'priority' => 'medium',
                'status' => 'pending',
                'customer_name' => 'Michael Brown',
                'customer_image' => 'https://randomuser.me/api/portraits/men/22.jpg',
                'order_id' => null,
                'tag' => 'Product Issue',
                'excerpt' => "The mangoes I received were not ripe and some were bruised.",
                'full_message' => "I would like a refund for the damaged items.",
                'submitted_at' => now()->subHours(5),
            ],
            // Add more sample data...
        ]);
    }
}

