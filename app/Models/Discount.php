<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'discount_type',
        'value',
        'start_date',
        'end_date',
        'usage_limit',
        'status',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'status' => 'boolean',
    ];

    public function getStatusLabelAttribute()
    {
        return now()->greaterThan($this->end_date) ? 'expired' : ($this->status ? 'active' : 'expired');
    }
}
