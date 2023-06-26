<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //jika nama tabel berbeda dengan nama model
    //maka buat property table
    protected $table = 'product';
    protected $fillable = ['name', 'description', 'price', 'id'];

    function category() {
        return $this->belongsTo(Category::class, 'id', 'id');

    }
}
