<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Boolean;

class TravelController extends Controller
{
    public function create(Request $request){
        $user = new User;
        $user = User::find(Auth::user()->email);
        $travels = $user->trips;
        $control = false;

        foreach($travels as $travel)
        {
            if($travel->pivot->trip_id == $request->id) $control = true;
        }
        

        if(!$control)
        {
            $trip = Trip::find($request->id);
            $trip->availableSeats = $trip->availableSeats-1;
            $trip->save();

            
            $user->trips()->attach($request->id);

            return redirect('/historial');
        }
        else return redirect("/viajes")->with('status', 'Ya has reservado este viaje');
    }
}
