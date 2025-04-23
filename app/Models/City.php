<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['model_id','name'];
    public function cars():HasMany{
        return $this->hasMany(Car::class,'city_id');
    }
    public function states():BelongsTo{
        return $this->belongsTo(State::class,'state_id');
    }
}
