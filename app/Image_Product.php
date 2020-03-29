<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_Product extends Model
{
    protected $fillable = [
        'product_id',
        'image_id',
    ];
}
