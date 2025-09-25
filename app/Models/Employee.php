<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
     protected $table = 'employees';

    protected $fillable = [
            'name',
            'email',
            'phone',
            'address',
            'img_url',
            'machine_id',
            'empolyee_status',
            'empolyee_type',
            'empolyee_start_date',
            'empolyee_end_date',
            'empolyee_remarks',
    ];

    public function machines(){
        return $this->belongsTo(Machine::class, 'machine_id');
    }
}
