<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Housing extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'housing';

    protected $fillable = [
        'address'
    ];
}
