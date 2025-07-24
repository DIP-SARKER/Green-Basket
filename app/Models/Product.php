<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'seller_id',    
        'category_id',
        'name',
        'description',
        'price',
        'stock_quantity',
        'image_url',
        'status',
    ];

    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


}
