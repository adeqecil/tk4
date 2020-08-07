<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product', 'description', 'purchase_price', 'sell_price', 'image'];
}
