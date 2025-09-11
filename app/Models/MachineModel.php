<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MachineModel extends Model
{
    protected $table = 'machine_models';


    /** @use HasFactory<\Database\Factories\UserFactory> */
    //use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'number',
        'type',
        'width',
        'raised_height',
        'height',
        'capacity',
        'lift_working',
        'fuel_id',
        'unit',
        'max_container',
        'wheel_base',
        'created_at',
        'updated_at',
    ];

    public function fuel()
    {
        return $this->belongsTo(Fuel::class, 'fuel_id');
    }
}
