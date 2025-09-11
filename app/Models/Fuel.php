<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $table = 'fuels';

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

    public function machineModels()
    {
        return $this->hasMany(related: MachineModel::class);
    }
}
