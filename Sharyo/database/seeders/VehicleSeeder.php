<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->delete();
        DB::table('vehicles')->insert([
            'plateNumber' => '2141 HBN',
            'model'=> 'Opel Corsa',
        ]);    }
}
