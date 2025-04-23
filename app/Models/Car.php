<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'model_id',
        'year',
        'price',
        'vin',
        'milage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at'
    ];
    public function owner(): BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
    public function carType():BelongsTo{
        return $this->belongsTo(CarType::class,'car_type_id');
    }
    public function fuelType():BelongsTo{
        return $this->belongsTo(FuelType::class,'fuel_type_id');
    }
    public function model():BelongsTo{
        return $this->belongsTo(CarModel::class,'model_id');
    }
    public function city():BelongsTo{
        return $this->belongsTo(City::class,'city_id');
    }
    public function features(): HasOne{
        return $this->hasOne(CarFeature::class,'car_id');
    }
    public function images():HasMany{
        return $this->hasMany(CarImage::class,'car_id');
    }

}
