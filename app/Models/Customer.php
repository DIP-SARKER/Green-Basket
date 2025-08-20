<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    //
    protected $fillable = [
        "name",
        "email",
        "phone",
        'address',
        "password",
    ];

    protected $hidden = [
        "password",
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function loyaltyPoints()
    {
        return $this->hasMany(LoyaltyPoint::class);
    }


}
