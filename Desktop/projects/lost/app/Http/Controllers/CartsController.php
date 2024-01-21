<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItems;

 class CartsController extends Controller
 {
    function Carts(){
        $carts = CartItems::all();

        return view('carts',['CartsItems'=>$carts]);
        }

}
