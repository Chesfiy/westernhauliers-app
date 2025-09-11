<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MachineFeature extends Model
{
     protected $table = 'machine_features';

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
        'value',
        'description',
        'machine_id',
        'created_at',
        'updated_at',
        
    ];

    public function machine()
    {
        return $this->belongsTo(Machine::class, 'machine_id');
    }
}
