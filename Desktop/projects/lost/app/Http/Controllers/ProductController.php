<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function Product(){

        $product = Product::all();
        return view('product', ['products' => $product]);
        
    }
}
