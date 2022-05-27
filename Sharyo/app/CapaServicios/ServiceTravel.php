<?php

namespace App\CapaServicios;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    public function createTravel(array $data)
    {

    }
}
