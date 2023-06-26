<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //jika nama tabel berbeda dengan nama model
    //maka buat property table
    protected $table = 'category';
    protected $fillable = ['name'];

    function products(){
        return $this->hasMany(Product::class, 'id', 'id');
    }
}
