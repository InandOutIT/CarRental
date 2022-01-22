<?php

namespace App\Http\Controllers\Api\cars;

use App\Http\Controllers\apiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookCarResource;
use App\Http\Resources\CarResource;
use App\Http\Resources\ReviewCarResource;
use App\Models\BookCar;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarComment;
use App\Traits\rulesReturnTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends apiController
{
    use rulesReturnTrait;


    public function getAllCars()
    {
        $cars = Car::all();
        return $this->apiResponse(CarResource::collection($cars) , self::STATUS_OK, 'selecting cars successfully');
    }


    public function getCarById($id)
    {
        $car = Car::findOrFail($id);
        return $this->apiResponse( new CarResource($car) ,self::STATUS_OK,"select car successfully" );
    }



    public function getCarsByBrand($id)
    {
        $brand = CarBrand::find($id);
        $cars = $brand->cars;
        return $this->apiResponse(CarResource::collection($cars) , self::STATUS_OK, 'selecting cars by brand successfully');
    }



    public function bookCar(Request $request,$car_id)
    {
        function dateDiffInDays($date1, $date2)
        {
            $diff = strtotime($date2) - strtotime($date1);
            return abs(round($diff / 86400));
        }

        $validate = $this->apiValidation($request, $this->bookCarRules());
        if($validate instanceof Response) return $validate;

       $book = new BookCar();
       $book->car_id = $car_id;
       $book->customar_id = auth('customer')->user()->id;
       $book->start_book = $request->start_book;
       $book->end_book = $request->end_book;
       $book->days = dateDiffInDays($book->start_book, $book->end_book) + 1;
       $book->save();
       return $this->apiResponse(new BookCarResource($book), self::STATUS_OK, 'car has been book successfully');
    }



    public function carReview(Request $request,$car_id)
    {

        $validate = $this->apiValidation($request, $this->reviewCarRules());
        if($validate instanceof Response) return $validate;


        $review = new CarComment();
        $review->car_id = $car_id;
        $review->customar_id = auth('customer')->user()->id;
        $review->review = $request->review;
        $review->save();
        return $this->apiResponse(new ReviewCarResource($review), self::STATUS_OK, 'car has been review successfully');

    }


}
