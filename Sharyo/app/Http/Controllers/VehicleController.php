<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //indice por defecto
    public function principal()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index')->with('vehicles', $vehicles);
    }

    // Método para llamar a la vista con el formulario de crear vehiculos
    public function showViewCreate()
    {
        return view('vehicles.create');
    }

    // Metodo para devolver la vista de editar
    public function returnEdit()
    {
        return "HOLA";
    }

    // Insertar
    public function insertarEnBD(Request $request)
    {
        $vehicle = new Vehicle;

        $vehicle->plateNumber = $request->plateNumber;
        $vehicle->model = $request->model;
        
        $vehicle->save();

        return redirect('/vehicles');
    }

    //
    public function update(Request $request, $plateNumber)
    {
        $vehicle = Vehicle::find($plateNumber);

        $vehicle->plateNumber = $request->plateNumber;
        $vehicle->model = $request->model;

        $vehicle->save();

        return response([
            'plateNumber'=>(isset($vehicle->plateNumber) ? $vehicle->plateNumber:''),
            'model'=>(isset($vehicle->model) ? $vehicle->model:'')
        ], 200);
    }

    //
    public function delete($plateNumber)
    {
        $vehicle = Vehicle::find($plateNumber);

        $vehicle->delete();

        return response([
            'plateNumber'=>(isset($vehicle->plateNumber) ? $vehicle->plateNumber:''),
            'model'=>(isset($vehicle->model) ? $vehicle->model:'')
        ], 200);
    }

    //
    public function getAll()
    {
        $vehicle = Vehicle::get();
        return response($vehicle, 200);
    }
}
