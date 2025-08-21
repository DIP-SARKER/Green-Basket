<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class SupportTicket extends Model
{
    use HasFactory;

    protected $table = 'support_tickets';

    protected $fillable = [
        'ticket_id',
        'subject',
        'priority',
        'status',
        'customer_id',
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
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function replies()
    {
        return $this->hasMany(SupportReply::class);
    }

}
