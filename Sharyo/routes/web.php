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
//Route::put('/vehicles/{plateNumber}', [VehicleController::class, 'returnEdit']);
Route::get('/vehicles', [VehicleController::class, 'principal']);
Route::get('/vehicles/create', [VehicleController::class, 'showViewCreate']);
Route::post('vehicles/create', [VehicleController::class, 'insertarEnBD']);

Route::resource('/trips', 'App\Http\Controllers\TripController');



//usuarios
//Route::resource('/users', 'App\Http\Controllers\UserController');
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'show']);
Route::post('users/create', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'delete']);



//cambiar a post?
/*Route::resource('register', function() {
    return view('registro');
});


Route::post('/user', [UserController::class, 'insert']);
Route::get('/trip', [TripController::class, 'getAll']);

Route::resource('createTrip', function() {
    return view('createTrip');
});*/

