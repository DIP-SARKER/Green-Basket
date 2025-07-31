<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    protected $fillable = [
        'ticket_id',
        'subject',
        'priority',
        'status',
        'customer_name',
        'customer_image',
        'order_id',
        'tag',
        'excerpt',
        'full_message',
        'submitted_at'
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];
}

