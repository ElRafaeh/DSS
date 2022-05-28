<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Trip;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function create(Request $request){
        //$trip = Trip::find($id);
        
        $travel = new Travel;
        $travel->email = $request->email;
        $travel->id = $request->id;

        $trip = Trip::find($request->id);
        $trip->availableSeats = $trip->availableSeats-1;
        $trip->save();

        $travel->save();
        return redirect('/historial');
    }
}
