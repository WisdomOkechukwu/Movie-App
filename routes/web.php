<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::get('/cart', function () {
    return view('public.search');
});


//Route to Homepage
Route::get('/', [MovieController::class, 'homePage'])->name('home');

Route::get('/show', [MovieController::class, 'addCart']);

//Single View for Video product
Route::get('/edit/{id}',[MovieController::class, 'findMovie']);


// Register Routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

//login Routes
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'SignIn']);

//logout Routes
Route::post('/logout',[AuthController::class, 'Logout'])->name('logout');

//Add to cart
Route::get('/addCart' ,[CartController::class, 'addCart'])->name('CartAdd');
