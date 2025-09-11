<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
     protected $table = 'brands';
    /** @use HasFactory<\Database\Factories\UserFactory> */
    //use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'img_url',
        'description'
    ];
}
