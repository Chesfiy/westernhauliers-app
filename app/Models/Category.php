<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'categories';

    /** @use HasFactory<\Database\Factories\UserFactory> */
    //use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'name',
        'description',
        'created_at',
        'updated_at',
    ];


    public function categoryType(){
        return $this->hasMany(CategoryType::class, 'category_id');
    }
    public function machines()
    {
        return $this->hasMany(Machine::class, 'category_id');
    }
}
