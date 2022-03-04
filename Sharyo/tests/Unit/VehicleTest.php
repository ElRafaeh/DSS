<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Vehicle;
use DB;

class VehicleTest extends TestCase
{
    /**
     * A basic unit test example. Al acabar el test, borra el vehiculo de la bd
     *
     * @return void
     */
    public function testVehicleInserts()
    {
        $vehicle = new Vehicle();
        $vehicle->plateNumber = '5986 ARD';
        $vehicle->model = "Seat Ibiza";
        $vehicle->save();

        $this->assertDatabaseHas('vehicles', ['plateNumber' => '5986 ARD']);
        DB::table('vehicles')->where('plateNumber', '=', '5986 ARD')->delete();
    }
    
    // Para este test, se debe haber ejecutado el seeder anteriormente.
    public function testVehicleSeederWorks()
    {
        $this->assertDatabaseHas('vehicles', ['plateNumber' => '2141 HBN']);
    }
}
