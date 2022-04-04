<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
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

Route::resource('/vehicles', 'App\Http\Controllers\VehicleController');






//cambiar a post?
/*Route::resource('register', function() {
    return view('registro');
});


Route::post('/user', [UserController::class, 'insert']);
Route::get('/trip', [TripController::class, 'getAll']);

Route::resource('createTrip', function() {
    return view('createTrip');
});*/

