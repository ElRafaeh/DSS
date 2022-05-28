<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Driver;
use App\Models\City;

class TripController extends Controller
{
    //indice por defecto
    public function index()
    {
        $trips = Trip::orderBy('origin', 'asc')
                        ->paginate(5);
        return view('trips.index')->with('trips', $trips);
    }

    public function listar(){
        $trips = Trip::all();
        $cities = City::all();
        return view('trips.listado')->with('trips', $trips)->with('cities', $cities);
    }

    public function search(Request $request)
    {
        $cities = City::all();
        $origen=$request->get('originBuscar');
        $destino=$request->get('destinationBuscar');
        $fecha=$request->get('fecha');
        $trips = Trip::where('origin', 'LIKE', '%' .$origen. '%')
                    ->where('destination', 'LIKE', '%' .$destino. '%')
                    ->orWhere('date', 'LIKE', '%' .$fecha. '%')
                    ->orderBy('date', 'asc')
                    ->paginate(5);
  
        return view('trips.listado',compact('trips'))->with('cities', $cities);
    }

    public function perfil($id){
        $trip = Trip::find($id);
        $cities = City::all();
        return view('trips.viaje')->with('trip', $trip)->with('cities', $cities);
    }

    public function principalSelected(Request $request)
    {
          
        $trips = Trip::orderBy($request->type, $request->order)->paginate($request->paginate)->appends(request()->query());
        return view('trips.index')->with('trips', $trips);
    }

    // Método para llamar a la vista con el formulario de crear vehiculos
    public function show()
    {
        $drivers = Driver::all();
        $cities = City::all();
        return view('trips.create')->with('cities', $cities)->with('drivers', $drivers);
    }
    public function returnEdit($id)
    {
        $drivers = Driver::all();
        $trip = Trip::find($id);
        $cities = City::all();

        return view("trips.edit")->with('trip', $trip)->with('drivers', $drivers)->with('cities', $cities);
    }

    // Insertar
    public function insert(Request $request)
    {

        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'availableSeats' => 'required|digits:1',
            'driver' => 'required',
            ]);

        $trip = new Trip;
        $trip->origin = $request->origin;
        $trip->destination = $request->destination;
        $trip->date = $request->date;   
        $trip->price = $request->price;       
        $trip->availableSeats = $request->availableSeats;
        if($request->driver == "Elija un conductor"){
            $trip->driver = null;
        }
        else{
            $trip->driver = $request->driver;
        }  

        $trip->save();

        return redirect('/trips');
    }

    // Insertar
    public function update(Request $request, $id)
    {
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'availableSeats' => 'required|digits:1',
            'driver' => 'required',
            ]);
        $trip = Trip::find($id);

        $trip->id = $request->id;
        $trip->destination = $request->destination;
        $trip->origin = $request->origin;
        $trip->date = $request->date;       
        $trip->price = $request->price;  
        $trip->availableSeats = $request->availableSeats;
        $trip->driver = $request->driver;    

        $trip->save();

        return redirect('/trips');
    }

    // Insertar
    public function delete($id)
    {
        $trip = Trip::find($id);  

        $trip->delete();

        return redirect('/trips');
    }   
}
