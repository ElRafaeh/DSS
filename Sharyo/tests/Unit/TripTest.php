<?php

namespace Tests\Unit;

use Tests\TestCase;
use DB;
use App\Models\Trip;
use App\Models\Vehicle;
use Exception;

class TripTest extends TestCase
{
    /**
     * A basic unit test example. Al acabar el trip, borra el vehiculo de la bd
     *
     * @return void
     */
    public function testTripInserts()
    {
        $trip = new Trip();
        $trip->tripID = 500;
        $trip->destination = 'Pozo Alcon';
        $trip->origin = 'San Vicente del Raspeig';
        $trip->date = '13/02/2016';
        $trip->distance = 340;
        $trip->availableSeats = '2';
        $trip->vehicle_id = '2141 HBN';
        $trip->save();

        $this->assertDatabaseHas('trips', ['tripID' => 500]);
        DB::table('trips')->where('tripID', '=', 500)->delete();
    }

    // Como el atributo vehicle_id de la clase trip es una foreign key que no admite
    // nulos, no se podrá insertar un vehicle_id que no se contemple en la tabla vehicles
    public function testRelationshipWithVehicle()
    {
        $trip = new Trip();
        $trip->tripID = 500;
        $trip->destination = 'Pozo Alcon';
        $trip->origin = 'San Vicente del Raspeig';
        $trip->date = '13/02/2016';
        $trip->distance = 340;
        $trip->availableSeats = '2';
        // Vehiculo inexistente
        $trip->vehicle_id = '2314 JKD';

        try {
            $trip->save();
        } catch (Exception $e) {
            $this->assertTrue(true);
            return;
        }
        $this->assertTrue(false);
    }
}
