<?php

namespace App\Http\Controllers;


use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller{

    public function principal(){
        $cities = City::orderBy('name', 'asc')->paginate(4);
        return view('cities.index')->with('cities', $cities);
    }

    // Método para llamar a la vista con el formulario de crear vehiculos
    public function showViewCreate(){
        return view('cities.create');
    }

    public function returnEdit($id)
    {
        $city = City::find($id);
    
        return view('cities.edit')->with('city', $city);
    }

    /**
     * Insertar
     */
    public function insertarEnBD(Request $request){
        $city = new City;
        $city->name = $request->name;
        $city->state = $request->state;
        $city->save();
        return redirect('/cities');
    }

    /**
     * Editar
     */
    public function update(Request $request, $name){
        $city = City::find($name);

        $city->name = $request->name;
        $city->state = $request->state;

        $city->save();

        return redirect('/cities');
    }

    /**
     * Borrar
     */
    public function delete($id){
        $city = City::find($id);

        $city->delete();

        return redirect('/cities');
    }

    /**
     * Devuelve todos las ciudades de la BD
     */
    public function getAll(){
        $city = City::get();
        return response($city, 200);
    }
    
}
