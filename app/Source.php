<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'source_id',
        'site_name',
        'site_url',
    ];

//    protected $primaryKey='source_id';
}
