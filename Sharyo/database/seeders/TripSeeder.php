<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->delete();
        DB::table('trips')->insert([
            'tripID' => 1,
            'destination'=> 'Madrid',
            'origin'=> 'Alicante',
            'date'=> '02/03/2022',
            'distance' => 400,
            'availableSeats'=> '3',
            'vehicle_id'=>'2141 HBN',
        ]);
    }
}
