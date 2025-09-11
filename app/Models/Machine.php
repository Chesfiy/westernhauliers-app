<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $table = 'machines';

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
        'category_id',
        'category_type_id',
        'raised_height',
        'description',
        'model_id',
        'video_url',
        'img_url',
        'fuel_id',
        'brand_id',
        'state',
        'is_for_sale',
        'is_for_rent',
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function type()
    {
        return $this->belongsTo(CategoryType::class, 'category_type_id');
    }
    public function model()
    {
        return $this->belongsTo(MachineModel::class, 'model_id');
    }

    public function fuel()
    {
        return $this->belongsTo(Fuel::class, 'fuel_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function pictures()
    {
        return $this->morphMany(Album::class, 'pictureable');
    }
    public function machineFeatures()
    {
        return $this->hasMany(MachineFeature::class, 'machine_id');
    }
    public function machineProperties()
    {
        return $this->hasMany(MachineProperty::class, 'machine_id');
    }

}
