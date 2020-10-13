<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function reviews(){
        return $this->hasMany(App\Models\Review::class);
    }
    public function orders(){
        return $this->hasMany(App\Models\Order::class);
    }
    public function addresses(){
        return $this->belongsTo(App\Models\Address::class);
    }
}
