<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Models\Vehicle;
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





// Rutas para los vehiculos
Route::get('/vehicles', [VehicleController::class, 'principal']);
Route::get('/vehicles/sel', [VehicleController::class, 'principalSelected']);
Route::get('/vehicles/create', [VehicleController::class, 'showViewCreate']);
Route::post('/vehicles/create', [VehicleController::class, 'insertarEnBD']);
Route::put('/vehicles/edit/{plateNumber}', [VehicleController::class, 'update']);
Route::get('/vehicles/edit/{plateNumber}', [VehicleController::class, 'returnEdit']);
Route::delete('/vehicles/delete/{plateNumber}', [VehicleController::class, 'delete']);

// Rutas para los viajes
Route::resource('/trips', 'App\Http\Controllers\TripController');

// Rutas para los conductores
Route::get('/drivers', [DriverController::class, 'principal']);
Route::get('/drivers/create', [DriverController::class, 'showViewCreate']);
Route::post('/drivers/create', [DriverController::class, 'insertarEnBD']);
Route::put('/drivers/edit/{nif}', [DriverController::class, 'update']);
Route::get('/drivers/edit/{nif}', [DriverController::class, 'returnEdit']);
Route::delete('/drivers/delete/{nif}', [DriverController::class, 'delete']);


//usuarios
//Route::resource('/users', 'App\Http\Controllers\UserController');
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'show']);
Route::post('users/create', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'delete']);
Route::get('/users', [UserController::class, 'search']);



//cambiar a post?
/*Route::resource('register', function() {
    return view('registro');
});


Route::post('/user', [UserController::class, 'insert']);
Route::get('/trip', [TripController::class, 'getAll']);

Route::resource('createTrip', function() {
    return view('createTrip');
});*/

