<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Source extends Model
{
    protected $table = 'product__sources';
    protected $fillable = [
        'product_id',
        'source_id',
        'product_name',
        'product_price'
    ];
}
