<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    //
    protected $fillable = ['name', 'email', 'phone', 'address', 'password'];
    protected $hidden = ['password'];
}
