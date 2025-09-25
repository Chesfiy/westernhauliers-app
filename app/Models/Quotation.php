<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    //

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'machine_id',
        'payment_type',
        'quantity',
        'remarks',
        'created_at',
        'updated_at',
    ];

    public function machine(){
        return $this->belongsTo(Machine::class, 'machine_id');
    }
}
