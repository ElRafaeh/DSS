<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
//cambiar a post?
Route::get('register', function() {
    return view('registro');
});
Route::get('createTrip', function() {
    return view('createTrip');
});

//cambiar a user
Route::get('/user', [UserController::class, 'insert']);
Route::get('/trip', [TripController::class, 'getAll']);