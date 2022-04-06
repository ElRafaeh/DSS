<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
        $drivers = Driver::all();
        return view('drivers.index')->with('drivers', $drivers);
    }    

    public function show(){
        return view('drivers.create');
    }

    public function store(Request $request){
        $driver = new Driver;

        $driver->nif = $request->nif;
        $driver->name = $request->name;
        $driver->experience = $request->experience;
        $driver->distance = $request->distance;
        $driver->vehicle_id = $request->vehicle_id;
        
        $driver->save();

        return redirect('/drivers');
    }

    public function update(Request $request, $nif){
        $driver = Driver::find($nif);

        $driver->nif = $request->nif;
        $driver->name = $request->name;
        $driver->experience = $request->experience;
        $driver->distance = $request->distance;
        $driver->vehicle_id = $request->vehicle_id;

        $driver->save();

        return response([
            'nif'=>(isset($driver->nif) ? $driver->nif:''),
            'name'=>(isset($driver->name) ? $driver->name:''),
            'experience'=>(isset($driver->experience) ? $driver->experience:''),
            'distance'=>(isset($driver->distance) ? $driver->distance:''),
            'vehicle_id'=>(isset($driver->vehicle_id) ? $driver->vehicle_id:'')
        ], 200);

    }


    public function delete($nif){
        $driver = Driver::find($nif);

        $driver->delete();

        return response([
            'nif'=>(isset($driver->nif) ? $driver->nif:''),
            'name'=>(isset($driver->name) ? $driver->name:''),
            'experience'=>(isset($driver->experience) ? $driver->experience:''),
            'distance'=>(isset($driver->distance) ? $driver->distance:''),
            'vehicle_id'=>(isset($driver->vehicle_id) ? $driver->vehicle_id:'')
        ], 200);
    }

    public function getAll(){
        $driver = Driver::get();
        return response($driver, 200);
    }

}
