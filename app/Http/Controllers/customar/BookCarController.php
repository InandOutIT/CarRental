<?php

namespace App\Http\Controllers\customar;

use App\Http\Controllers\Controller;
use App\Models\BookCar;
use Illuminate\Http\Request;

class BookCarController extends Controller
{
    public function book(Request $request)

    {

        function dateDiffInDays($date1, $date2) 
    {
        $diff = strtotime($date2) - strtotime($date1);
        return abs(round($diff / 86400));
    }
        // dd($request);
        $book=new BookCar();
        $user_id=session("loggedUser");
        $id=$request->id;

        $is_book=$book->where(["car_id"=>$id,"customar_id"=>$user_id])->first();
        if($is_book){
            echo 2;
        }else{
            $book->customar_id=$user_id;
            $book->car_id=$id;
            $book->start_book = date($request->start_book);
            $book->end_book = date($request->end_book);
            $book->days = dateDiffInDays( $book->start_book, $book->end_book)+1;
            // $book->days=1;
            $result=$book->save();
            
            // $car = Car::find($id);
            // $car->status = 0;
            if($result){
                echo 1;
            }else{
                echo 0;
            }
        }
    }


    public function getBookCar()
    {
        $id=session("loggedUser");
        $bookCar=BookCar::where("customar_id",$id)->get();
        $output="";
        if(count($bookCar) > 0){
            $output .="    <div class='table-responsive'>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Car Name</th>
                        <th>Days</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Confirm</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>";

                foreach($bookCar as $car){
                    $output.="<tr>
                    <td>{$car->id}</td>
                    <td>{$car->book_car->car_name}</td>
                    <td>{$car->days}</td>
                    <td>$ {$car->book_car->car_price}</td>
                    <td>"."$ ".$car->days*$car->book_car->car_price."</td>
                    <td>{$car->book}</td>
                    <td><button data-id='{$car->id}' id='delete-book-car' class='btn btn-danger'>Delete</button></td>
                </tr>";
                }

                $output.=" </tbody>
                </table>
            </div>";

            echo $output;
        }
    }

    public function delete(Request $request)
    {
        $bookCar=BookCar::find($request->id);
        $result=$bookCar->delete();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }
}
