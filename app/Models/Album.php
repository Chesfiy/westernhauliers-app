<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    protected $table = 'albums';

     protected $fillable = [
        
        'img_url',
        'pictureable_id',
        'pictureable_type'
    ];
}
