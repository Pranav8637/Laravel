<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Source extends Model
{
    protected $fillable = [
        'product_id',
        'source_id',
        'scraped_product_name',
        'product_price'
    ];
}
