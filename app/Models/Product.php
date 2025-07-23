<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'seller_id',    // ✅ Add this
        'category_id',
        'name',
        'description',
        'price',
        'stock_quantity',
        'image',
        'status',
    ];


}
