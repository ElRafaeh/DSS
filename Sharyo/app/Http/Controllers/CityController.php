<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller{

    public function index(){
        $citys = City::all();
        return view('citys.index')->with('citys', $citys);
    }

    // Método para llamar a la vista con el formulario de crear vehiculos
    public function show(){
        return view('citys.create');
    }

    /**
     * Insertar
     */
    public function insert(Request $request){
        $city = new City;

        $city->id = $request->id;
        $city->name = $request->name;
        $city->state = $request->state;    

        $city->save();

        return response([
                'id'=>(isset($city->id) ? $city->id:''),
                'name'=>(isset($city->name) ? $city->name:''),
                'state'=> (isset($city->state) ? $city->state:''),
            ], 200);
    }

    /**
     * Editar
     */
    public function update(Request $request, $id){
        $City = City::find($id);

        $city->id = $request->id;
        $city->name = $request->name;
        $city->state = $request->state;    

        $City->save();

        return response(
            [
                'id'=>(isset($city->id) ? $city->id:''),
                'name'=>(isset($city->name) ? $city->name:''),
                'state'=> (isset($city->state) ? $city->state:''),
            ], 
            200
        );
    }

    /**
     * Borrar
     */
    public function delete($id){
        $city = City::find($id);  

        $city->delte();

        return response(
            [
                'id'=>(isset($city->id) ? $city->id:''),
                'name'=>(isset($city->name) ? $city->name:''),
                'state'=> (isset($city->state) ? $city->state:''),
            ], 
            200
        );
    }

    /**
     * Devuelve todos las ciudades de la BD
     */
    public function getAll(){
        $city = City::get();

        return response($city, 200);
    }
    
}
