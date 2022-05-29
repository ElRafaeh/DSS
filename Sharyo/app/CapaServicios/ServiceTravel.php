<?php

namespace App\CapaServicios;

use App\Models\User;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceTravel
{   
    // Funcion para devolver los trips que existen en travels asociados a un email
    public function getTripsByEmail($email)
    {
        $user = User::where('email', Auth::user()->email)->first();

        if($user != null)
        {
            $trips = $user->trips;
            return $trips;
        }

        return null;
    }


    // Funcion para crear un travel
    public function createTravel($email, $trip_id)
    {
        error_log($trip_id);
        $rollback = false;
        DB::beginTransaction();
        $user = new User;
        $user = User::find($email);
        $travels = $user->trips;

        foreach($travels as $travel)
        {
            if($travel->pivot->trip_id == $trip_id) $rollback = true;
        }
        

        $trip = Trip::find($trip_id);
        
        $trip->availableSeats = $trip->availableSeats-1;
        $trip->update();

        if($trip->availableSeats >= 0 && !$rollback)
        {
            $user->trips()->attach($trip_id);
        }
        else
        {
            $rollback = true;
        }

        if($rollback)
        {
            DB::rollBack();
            return false;
        }

        DB::commit();
        return true;   
    }
}
