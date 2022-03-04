<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Trip;
use App\Models\Trip_User;
use DB;

class Trip_UserTest extends TestCase
{
    /**
     * Con este test comprobamos la relación de la base de datos entre Users y Trips
     */
    public function testInsertRelationUserTrip()
    {
        // Creamos un nuevo user en la bd
        $user = new User();
        $user->name = 'Rafael';
        $user->surname = 'Bustos Moreno';
        $user->email = 'rbm71@alu.ua.es';
        $user->password = 'Hola1234';
        $user->phoneNumber = 654367283;
        $user->save();
        // Creamos un nuevo trip en la bd
        $trip = new Trip();
        $trip->tripID = 500;
        $trip->destination = 'Pozo Alcon';
        $trip->origin = 'San Vicente del Raspeig';
        $trip->date = '13/02/2016';
        $trip->distance = 340;
        $trip->availableSeats = '2';
        $trip->vehicle_id = '2141 HBN';
        $trip->save();

        $trip_user = new Trip_User();
        $trip_user->user_id = $user->email;
        $trip_user->trip_id = $trip->tripID;
        $trip_user->save();
        $this->assertDatabaseHas('trip_user', ['trip_id' => 500]);
        $this->assertDatabaseHas('trip_user', ['user_id' => 'rbm71@alu.ua.es']);
        $this->assertTrue(true);
        
        // Lo eliminamos todo de la bd
        DB::table('trip_user')->where('trip_id', '=', 500)->delete();
        DB::table('trips')->where('tripID', '=', 500)->delete();
        DB::table('users')->where('email', '=', 'rbm71@alu.ua.es')->delete();

        $this->assertTrue(true);
    }
}
