<?php

namespace App\Http\Controllers\Api\brands;

use App\Http\Controllers\apiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Models\CarBrand;
use Illuminate\Http\Request;

class BrandController extends apiController
{
    

    public function index()
    {
        $brands = CarBrand::all();

        return $this->apiResponse(BrandResource::collection($brands) , self::STATUS_OK, 'selecting brand successfully');
    }

}
