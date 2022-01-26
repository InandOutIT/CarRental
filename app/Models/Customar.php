<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Customar extends Model
{


    use HasApiTokens;

    use HasFactory;
    protected $table="customars";
    protected $fillable=["fname","lname","username","email","password","image","phone"];

    public function cares(){
        return $this->hasMany(Car::class);
    }
    public function car_comments(){
        return $this->hasMany(CarComment::class);
    }
    
    public function blog_comments(){
        return $this->hasMany(Comments::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function books(){
        return $this->hasMany(BookCar::class);
    }
}