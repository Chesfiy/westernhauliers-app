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

    protected $casts = [
    'is_for_sale' => 'boolean',
    'is_for_rent' => 'boolean',
    ];
    
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
        'sale_price',
        'rental_price_per_hour',
        'rental_price_per_day',
        'rental_price_per_week',
        'rental_price_per_month',
        'SKU',
        'current_location',
        'notes',
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

    public function employees()
    {
        return $this->hasMany(Employee::class, 'machine_id');
    }


    public function quotations()
    {
        return $this->hasMany(Quotation::class, 'machine_id');
    }

}
