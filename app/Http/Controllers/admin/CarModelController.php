<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BookCar;
use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
   

    public function show($id)
    {
        $carModel = CarModel::find($id);
        return $carModel->cars;
    }

}
