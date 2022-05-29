<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CapaServicios\ServiceTravel;

class TravelController extends Controller
{
    public function create($trip_id){
        $service = new ServiceTravel;
        $option = $service->createTravel(Auth::user()->email, $trip_id);

        if(!$option)
            return redirect("/viajes")->with('status', 'Error, ya has reservado este viaje o no quedan asientos disponibles para este viaje.');
        else
            return redirect('/historial'); 
    }
}
