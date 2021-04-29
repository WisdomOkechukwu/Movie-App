<?php

use App\Http\Controllers\AuthController;
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






// Route::get('/user', function () {
//     return view('public.moviedetails');
// });


//Route to Homepage
Route::get('/', [MovieController::class, 'homePage']);

// Route::get('/show', [MovieController::class, 'show']);

//Single View for Video product
Route::get('/edit/{id}',[MovieController::class, 'findMovie']);

Route::get('/add/{id}',[MovieController::class, 'addCart']);

Route::get('/login',[AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');