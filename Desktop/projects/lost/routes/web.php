<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCustomLoginController;
use App\Http\Controllers\ProductCartControllerV2;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartsController;





Route::get('/', [AuthCustomLoginController::class, 'welcome'])->name('welcome');
Route::get('/addtocart',[AuthCustomLoginController::class,'addtocart'])->name('addtocart');

Route::get('/product',[ProductController::class,'Product'])->name('product');
Route::get('/loginpost',[AuthCustomLoginController::class,'loginpost'])->name('loginpost');
Route::get('/register',[AuthCustomLoginController::class,'register'])->name('register');
Route::get('/registerpost',[AuthCustomLoginController::class,'registerpost'])->name('registerpost');


Route::post('/addToCart', [ProductCartControllerV2::class,'addToCart'])->name('addToCart');
Route::post('/Carts', [CartsController::class,'Carts'])->name('Carts');


Route::post('/register.post', [LoginController::class, 'register'])->name('register.post');

Route::post('/login.post', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

