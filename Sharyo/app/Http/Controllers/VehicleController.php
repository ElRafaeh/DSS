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

    // Metodo para llamar a la vista con el formulario de editar vehiculos
    public function returnEdit($plateNumber)
    {
        //$vehicle = Vehicle::where('plateNumber', '=', $plateNumber)->firstOrFail();

        $vehicle = Vehicle::find($plateNumber);

        return view("vehicles.edit")->with('vehicle', $vehicle);
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

        return redirect('/vehicles');
    }

    //
    public function delete($plateNumber)
    {
        $vehicle = Vehicle::find($plateNumber);

        $vehicle->delete();

        $this->showViewCreate();
    }

    //
    public function getAll()
    {
        $vehicle = Vehicle::get();
        return response($vehicle, 200);
    }
}
