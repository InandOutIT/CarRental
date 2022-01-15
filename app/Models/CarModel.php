<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarModel extends Model
{
    use HasFactory;

    protected $table="car_model";
    protected $fillable=[
        'name',
        'carbrand_id'
    ];

    public function brand(){
        return $this->belongsTo(CarBrand::class,'carbrand_id');
    }

    public function cars(){
        return $this->hasMany(Car::class,'car_model_id');
    }
}