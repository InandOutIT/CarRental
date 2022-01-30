<?php

namespace App\Http\Controllers\customar;

use App\Http\Controllers\Controller;
use App\Models\BookCar;
use App\Models\Customar;
use Illuminate\Http\Request;

class AccountController extends Controller
{
 

  public function index1()
  { 
    $bookCar=BookCar::all();
      $id=session("loggedUser");
      $account=Customar::find($id);
    return view("customar.account",["account"=>$account,"bookCar"=>$bookCar]);
  }
}
