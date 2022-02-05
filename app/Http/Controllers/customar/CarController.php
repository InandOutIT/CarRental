<?php

namespace App\Http\Controllers\customar;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarCategory;
use App\Models\CarComment;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class CarController extends Controller
{
   public function index(){
       $car=Car::where("status",1)->orderBy("id","DESC")->get();
        $category=CarCategory::all();

       return view("customar.allCar",["cars"=>$car,"category"=>$category]);
   }

   public function detail($id){
       $car=Car::find($id);
      $images=Image::where("car_id", $id)->get();
    return view("customar.details",["cars"=>$car,"images"=>$images]);
   }
}