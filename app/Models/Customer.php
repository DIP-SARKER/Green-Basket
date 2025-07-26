<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    //
    protected $fillable = [
        "name",
        "phone",
        "password",
    ];

    protected $hidden = [
        "password",
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function cartItems(){
        return $this->hasMany(Cart::class);
    }

}
