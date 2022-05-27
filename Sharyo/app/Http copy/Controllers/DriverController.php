<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Http\Request;



class DriverController extends Controller
{
    public function principal(){
        $drivers = Driver::orderBy('experience', 'asc')->paginate(4);
        return view('drivers.index')->with('drivers', $drivers);
    }    

    public function showViewCreate(){
        $vehicles = Vehicle::all();
        return view('drivers.create')->with('vehicles', $vehicles);
    }

    public function principalSelected(Request $request)
    {
          
        $drivers = Driver::orderBy($request->type, $request->order)->paginate($request->paginate)->appends(request()->query());
        return view('drivers.index')->with('drivers', $drivers);
    }

    // Metodo para llamar a la vista con el formulario de editar vehiculos
    public function returnEdit($nif)
    {
        $vehicles = Vehicle::all();
        $driver = Driver::find($nif);

        return view("drivers.edit")->with('driver', $driver)->with('vehicles', $vehicles);
    }

    public function insertarEnBD(Request $request){
        $driver = new Driver;

        $driver->nif = $request->nif;
        $driver->name = $request->name;
        $driver->experience = $request->experience;
        if($request->vehicle_id == "Elija un vehículo"){
            $driver->vehicle_id = null;
        }
        else{
            $driver->vehicle_id = $request->vehicle_id;
        }
        
        $driver->save();

        return redirect('/drivers');
    }

    public function update(Request $request, $nif){
        $driver = Driver::find($nif);
        
        $driver->name = $request->name;
        $driver->experience = $request->experience;
        if($request->vehicle_id == "Elija un vehículo"){
            $driver->vehicle_id = null;
        }
        else{
            $driver->vehicle_id = $request->vehicle_id;
        }
        $driver->save();

        return redirect('/drivers');
    }


    public function delete($nif){
        $driver = Driver::find($nif);

        $driver->delete();

        return redirect('/drivers');
    }

    public function getAll(){
        $driver = Driver::get();
        return response($driver, 200);
    }

}
