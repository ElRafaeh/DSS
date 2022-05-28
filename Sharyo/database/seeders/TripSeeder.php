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
      DB::table('trips')->insert([
        'date' => '29/05/2022',
        'availableSeats' => '3',   
        'driver' => 'Y1981204C',
        'origin' => 'Alicante',
        'destination' => 'Valencia',
        'price' => '18'
      ]);

      DB::table('trips')->insert([
        'date' => '02/06/2022',
        'availableSeats' => '1',   
        'driver' => '49627353T',
        'origin' => 'Jaén',
        'destination' => 'Pozo Alcón',
        'price' => '21'
      ]);

      DB::table('trips')->insert([
        'date' => '29/05/2022',
        'availableSeats' => '3',   
        'driver' => '90865644N',
        'origin' => 'Alicante',
        'destination' => 'Valencia',
        'price' => '23'
      ]);

      DB::table('trips')->insert([
        'date' => '29/05/2022',
        'availableSeats' => '3',   
        'driver' => 'X2846345C',
        'origin' => 'Alicante',
        'destination' => 'Valencia',
        'price' => '27'
      ]);

      DB::table('trips')->insert([
        'date' => '02/06/2022',
        'availableSeats' => '2',   
        'driver' => '49627353T',
        'origin' => 'Jaén',
        'destination' => 'Alicante',
        'price' => '9'
      ]);

      DB::table('trips')->insert([
        'date' => '29/05/2022',
        'availableSeats' => '3',   
        'driver' => '90865644N',
        'origin' => 'Valencia',
        'destination' => 'Alicante',
        'price' => '30'
      ]);

      DB::table('trips')->insert([
        'date' => '29/05/2022',
        'availableSeats' => '3',   
        'driver' => '90865644N',
        'origin' => 'Albacete',
        'destination' => 'Jaén',
        'price' => '10'
      ]);

  
    }
}
