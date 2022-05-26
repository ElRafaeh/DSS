<?php

namespace App\CapaServicios;

use App\Models\Travel;
use Illuminate\Support\Facades\DB;


class ServiceTravel
{   
    // Funcion para devolver los trips que existen en travels asociados a un email
    public function getTripsByEmail($email)
    {
        $travels = Travel::find($email);

        return $travels;
    }


    // Funcion para crear un travel
    public function createTravel(array $data)
    {

    }
}
