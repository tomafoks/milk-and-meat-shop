<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
