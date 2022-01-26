<?php

namespace App\Http\Controllers\customar;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarComment;
use App\Models\Image;
use Illuminate\Http\Request;

class CarController extends Controller
{
   public function index(){
       $car=Car::orderBy("id","DESC")->limit(10)->get();
       return view("customar.allCar",["cars"=>$car]);
   }

   public function detail($id){
       $car=Car::find($id);
      $images=Image::where("car_id", $id)->get();
    return view("customar.details",["cars"=>$car,"images"=>$images]);
   }
}