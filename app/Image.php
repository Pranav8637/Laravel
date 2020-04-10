<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image_id',
        'filename',
    ];
//    protected $primaryKey='image_id';
}
