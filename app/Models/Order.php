<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Order extends Model
{

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function products() {

        return $this->belongsToMany(Product::class);
    }
}
