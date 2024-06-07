<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
    // funzione per relazione con orders
    public function orders() {
        return $this->belongsToMany(Order::class);
    }
    // funzione per relazione con users
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
