<?php

namespace App\Http\Controllers\customar;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarCategory;
use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
       $category=CarCategory::orderBy("id","DESC")->limit(6)->get();
       $brand=CarBrand::orderBy("id","DESC")->limit(6)->get();
       $car=Car::orderBy("id","DESC")->limit(6)->get();
       $posts=Posts::orderBy("id","DESC")->limit(3)->get();
    //    dd($category);
       return view("index",["category"=>$category,"cars"=>$car,"brand"=>$brand]);
   }


   
}