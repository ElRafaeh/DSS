<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CityController;
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


// Rutas login y register
Route::get('/mostrarLogin', [UserController::class, 'mostrarLogin']);
Route::post('login', [UserController::class, 'login']);
Route::get('/mostrarRegistro', [UserController::class, 'mostrarRegister']);

// Rutas para los vehiculos
Route::get('/vehicles', [VehicleController::class, 'principal']);
Route::get('/vehicles/sel', [VehicleController::class, 'principalSelected']);
Route::get('/vehicles/create', [VehicleController::class, 'showViewCreate']);
Route::post('/vehicles/create', [VehicleController::class, 'insertarEnBD']);
Route::put('/vehicles/edit/{plateNumber}', [VehicleController::class, 'update']);
Route::get('/vehicles/edit/{plateNumber}', [VehicleController::class, 'returnEdit']);
Route::delete('/vehicles/delete/{plateNumber}', [VehicleController::class, 'delete']);

// Rutas para los viajes
Route::get('/trips', [TripController::class, 'index']);
Route::get('/trips/sel', [TripController::class, 'principalSelected']);
Route::get('/trips/create', [TripController::class, 'show']);
Route::post('trips/create', [TripController::class, 'insert']);
Route::put('/trips/{id}', [TripController::class, 'update']);
Route::get('/trips/{id}', [TripController::class, 'returnEdit']);
Route::delete('/trips/{id}', [TripController::class, 'delete']);
Route::get('/viajes', [TripController::class, 'listar']);


// Rutas para los conductores
Route::get('/drivers', [DriverController::class, 'principal']);
Route::get('/drivers/sel', [DriverController::class, 'principalSelected']);
Route::get('/drivers/create', [DriverController::class, 'showViewCreate']);
Route::post('/drivers/create', [DriverController::class, 'insertarEnBD']);
Route::put('/drivers/edit/{nif}', [DriverController::class, 'update']);
Route::get('/drivers/edit/{nif}', [DriverController::class, 'returnEdit']);
Route::delete('/drivers/delete/{nif}', [DriverController::class, 'delete']);


//usuarios
//Route::resource('/users', 'App\Http\Controllers\UserController');
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/sel', [UserController::class, 'principalSelected']);
Route::get('/users/create', [UserController::class, 'show']);
Route::post('users/create', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'delete']);
Route::get('/users', [UserController::class, 'search']);

// Rutas para las ciudades
Route::get('/cities', [CityController::class, 'principal']);
Route::get('/cities/sel', [CityController::class, 'principalSelected']);
Route::get('/cities/create', [CityController::class, 'showViewCreate']);
Route::post('/cities/create', [CityController::class, 'insertarEnBD']);
Route::put('/cities/edit/{name}', [CityController::class, 'update']);
Route::get('/cities/edit/{name}', [CityController::class, 'returnEdit']);
Route::delete('/cities/delete/{name}', [CityController::class, 'delete']);

