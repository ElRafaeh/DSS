<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    //indice por defecto
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index')->with('trips', $trips);
    }

    // Método para llamar a la vista con el formulario de crear vehiculos
    public function show()
    {
        return view('trips.create');
    }

    // Insertar
    public function insert(Request $request)
    {
        $trip = new Trip;

        $trip->id = $request->id;
        $trip->destination = $request->destination;
        $trip->origin = $request->origin;
        $trip->date = $request->date;
        $trip->distance = $request->distance;        
        $trip->availableSeats = $request->availableSeats;
        $trip->vehicle_id = $request->vehicle_id;    

        $trip->save();

        return response([
                'id'=>(isset($trip->id) ? $trip->id:''),
                'destination'=>(isset($trip->destination) ? $trip->destination:''),
                'origin'=> (isset($trip->origin) ? $trip->origin:''),
                'date'=> (isset($trip->date) ? $trip->date:''),
                'distance'=> (isset($trip->distance) ? $trip->distance:''),
                'availableSeats'=> (isset($trip->availableSeats) ? $trip->availableSeats:''),
                'vehicle_id'=> (isset($trip->vehicle_id) ? $trip->vehicle_id:''),
            ], 200);
    }

    // Insertar
    public function update(Request $request, $id)
    {
        $trip = Trip::find($id);

        $trip->id = $request->id;
        $trip->destination = $request->destination;
        $trip->origin = $request->origin;
        $trip->date = $request->date;
        $trip->distance = $request->distance;        
        $trip->availableSeats = $request->availableSeats;
        $trip->vehicle_id = $request->vehicle_id;    

        $trip->save();

        return response([
                'id'=>(isset($trip->id) ? $trip->id:''),
                'destination'=>(isset($trip->destination) ? $trip->destination:''),
                'origin'=> (isset($trip->origin) ? $trip->origin:''),
                'date'=> (isset($trip->date) ? $trip->date:''),
                'distance'=> (isset($trip->distance) ? $trip->distance:''),
                'availableSeats'=> (isset($trip->availableSeats) ? $trip->availableSeats:''),
                'vehicle_id'=> (isset($trip->vehicle_id) ? $trip->vehicle_id:''),
            ], 200);
    }

    // Insertar
    public function delete($id)
    {
        $trip = Trip::find($id);  

        $trip->delte();

        return response([
                'id'=>(isset($trip->id) ? $trip->id:''),
                'destination'=>(isset($trip->destination) ? $trip->destination:''),
                'origin'=> (isset($trip->origin) ? $trip->origin:''),
                'date'=> (isset($trip->date) ? $trip->date:''),
                'distance'=> (isset($trip->distance) ? $trip->distance:''),
                'availableSeats'=> (isset($trip->availableSeats) ? $trip->availableSeats:''),
                'vehicle_id'=> (isset($trip->vehicle_id) ? $trip->vehicle_id:''),
            ], 200);
    }

    public function getAll()
    {
        $trip = Trip::get();

        return response("maricon", 200);
    }
}
