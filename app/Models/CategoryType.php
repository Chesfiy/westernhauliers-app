<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    //
    protected $table = 'category_types';

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function machines(){
        return $this->hasMany(Machine::class, 'category_type_id');
    }
}
