<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    // Insertar
    public function insert(Request $request)
    {
        $vehicle = new Vehicle;

        $vehicle->plateNumber = $request->plateNumber;
        $vehicle->model = $request->model;
        
        $vehicle->save();

        return response([
                'plateNumber'=>(isset($vehicle->plateNumber) ? $vehicle->plateNumber:''),
                'model'=>(isset($vehicle->model) ? $vehicle->model:'')
            ], 200);
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
