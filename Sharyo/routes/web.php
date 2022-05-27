<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\City;

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

// Rutas principales
Route::get('/', function () {
    $cities = City::all();
        
    return view('welcome')->with('cities', $cities);
});

// Ruta para el admin
Route::get('/admin', function() { return view('admin.panelAdministrador'); })->middleware('auth', 'admin');

// Rutas de login por defecto laravel
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para los vehiculos
Route::get('/vehicles', [VehicleController::class, 'principal'])->middleware('auth', 'admin');
Route::get('/vehicles/sel', [VehicleController::class, 'principalSelected'])->middleware('auth', 'admin');
Route::get('/vehicles/create', [VehicleController::class, 'showViewCreate'])->middleware('auth', 'admin');
Route::post('/vehicles/create', [VehicleController::class, 'insertarEnBD'])->middleware('auth', 'admin');
Route::put('/vehicles/edit/{plateNumber}', [VehicleController::class, 'update'])->middleware('auth', 'admin');
Route::get('/vehicles/edit/{plateNumber}', [VehicleController::class, 'returnEdit'])->middleware('auth', 'admin');
Route::delete('/vehicles/delete/{plateNumber}', [VehicleController::class, 'delete'])->middleware('auth', 'admin');

// Rutas para los viajes
Route::get('/trips', [TripController::class, 'index'])->middleware('auth', 'admin');
Route::get('/trips/sel', [TripController::class, 'principalSelected'])->middleware('auth', 'admin');
Route::get('/trips/create', [TripController::class, 'show'])->middleware('auth', 'admin');
Route::post('trips/create', [TripController::class, 'insert'])->middleware('auth', 'admin');
Route::put('/trips/{id}', [TripController::class, 'update'])->middleware('auth', 'admin');
Route::get('/trips/{id}', [TripController::class, 'returnEdit'])->middleware('auth', 'admin');
Route::delete('/trips/{id}', [TripController::class, 'delete'])->middleware('auth', 'admin');
Route::get('/viajes', [TripController::class, 'listar']);
Route::get('/viajes', [TripController::class, 'search']);
Route::get('/viaje/{id}', [TripController::class, 'perfil']);


// Rutas para los conductores
Route::get('/drivers', [DriverController::class, 'principal'])->middleware('auth', 'admin');
Route::get('/drivers/sel', [DriverController::class, 'principalSelected'])->middleware('auth', 'admin');
Route::get('/drivers/create', [DriverController::class, 'showViewCreate'])->middleware('auth', 'admin');
Route::post('/drivers/create', [DriverController::class, 'insertarEnBD'])->middleware('auth', 'admin');
Route::put('/drivers/edit/{nif}', [DriverController::class, 'update'])->middleware('auth', 'admin');
Route::get('/drivers/edit/{nif}', [DriverController::class, 'returnEdit'])->middleware('auth', 'admin');
Route::delete('/drivers/delete/{nif}', [DriverController::class, 'delete'])->middleware('auth', 'admin');


//usuarios
//Route::resource('/users', 'App\Http\Controllers\UserController');
Route::get('/users', [UserController::class, 'index'])->middleware('auth', 'admin');
Route::get('/users/sel', [UserController::class, 'principalSelected'])->middleware('auth', 'admin');
Route::get('/users/create', [UserController::class, 'show'])->middleware('auth', 'admin');
Route::post('users/create', [UserController::class, 'store'])->middleware('auth', 'admin');
Route::get('/users/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/users/{id}', [UserController::class, 'update'])->middleware('auth');
Route::get('/userProfile/pic/{id}',[UserController::class, 'uploadPic'])->middleware('auth');
Route::put('/userProfile/changePic/{id}', [UserController::class, 'changePic'])->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'delete'])->middleware('auth', 'admin');
Route::get('/users', [UserController::class, 'search'])->middleware('auth', 'admin');
Route::get('/historial', [UserController::class, 'historial'])->middleware('auth');

//Perfiles
Route::get('/userProfile','App\Http\Controllers\ProfileController@viewUserProfile')->middleware('auth');
Route::get('/profile/{email}','App\Http\Controllers\ProfileController@viewUser')->middleware('auth');
Route::get('/profile/driver/{id}','App\Http\Controllers\ProfileController@viewDriver')->middleware('auth');


// Rutas para las ciudades
Route::get('/cities', [CityController::class, 'principal'])->middleware('auth', 'admin');
Route::get('/cities/sel', [CityController::class, 'principalSelected'])->middleware('auth', 'admin');
Route::get('/cities/create', [CityController::class, 'showViewCreate'])->middleware('auth', 'admin');
Route::post('/cities/create', [CityController::class, 'insertarEnBD'])->middleware('auth', 'admin');
Route::put('/cities/edit/{name}', [CityController::class, 'update'])->middleware('auth', 'admin');
Route::get('/cities/edit/{name}', [CityController::class, 'returnEdit'])->middleware('auth', 'admin');
Route::delete('/cities/delete/{name}', [CityController::class, 'delete'])->middleware('auth', 'admin');
