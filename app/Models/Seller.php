<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    //
    protected $fillable = ['name', 'email', 'phone', 'address', 'password', 'products', 'status'];
    protected $hidden = ['password'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
