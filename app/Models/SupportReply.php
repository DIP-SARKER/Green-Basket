<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupportReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'support_ticket_id',
        'message',
        'sender_type'
    ];

    public function ticket()
    {
        return $this->belongsTo(SupportTicket::class);
    }
}
