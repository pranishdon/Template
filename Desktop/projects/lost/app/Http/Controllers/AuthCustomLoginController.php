<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthCustomLoginController extends Controller
{

    function welcome()
    {
        return view ('welcome');
    }
    function login()
    {
        return view ('login');
    }
    function product()
    {
        return view ('product');
    }
    function addtocart()
    {
        return view ('addtocart');
    }

}
