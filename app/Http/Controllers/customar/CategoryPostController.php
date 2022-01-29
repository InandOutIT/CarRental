<?php

namespace App\Http\Controllers\customar;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarCategory;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    public function index($id)
    {
        $brand=CarBrand::find($id);
        $category=CarCategory::find($id);
        $cars=Car::where("car_brand_id",$id)->get();
        return view("customar.category-post",["cars"=>$cars,"brand"=>$brand]);
    }
}
