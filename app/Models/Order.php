<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // relazione con users one to many
    public function users() {
        return $this->belongsTo(User::class);
    }
    // relazione con products one to many
    public function products() {
        return $this->hasMany(Product::class);
    }
}
