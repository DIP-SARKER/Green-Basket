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
        "password",
    ];

    protected $hidden = [
        "password",
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
