<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'plateNumber' => '2141 HBN',
            'model' => 'Opel Corsa',
        ]);
        DB::table('vehicles')->insert([
            'plateNumber' => '7296 KMG',
            'model' => 'Ford Focus',
        ]);
        DB::table('vehicles')->insert([
            'plateNumber' => '6523 QRF',
            'model' => 'Ferrari F40',
        ]);
        DB::table('vehicles')->insert([
            'plateNumber' => '5647 GNH',
            'model' => 'Porche Cayane',
        ]);
        DB::table('vehicles')->insert([
            'plateNumber' => '2345 HTJ',
            'model' => 'Ford Fiesta',
        ]);
        DB::table('vehicles')->insert([
            'plateNumber' => '9087 LKJ',
            'model' => 'Kia Mistic',
        ]);
        
        DB::table('vehicles')->insert([
            'plateNumber' => '5263 PLK',
            'model' => 'Hola Perdon',
        ]); 

        DB::table('vehicles')->insert([
            'plateNumber' => '5263 PLC',
            'model' => 'Bugatti Veiron',
        ]);

        DB::table('vehicles')->insert([
            'plateNumber' => '3456 PLC',
            'model' => 'Ford Mondeo',
        ]);

        DB::table('vehicles')->insert([
            'plateNumber' => '5673 PLC',
            'model' => 'Opel Astra',
        ]);

        DB::table('vehicles')->insert([
            'plateNumber' => '9023 PLC',
            'model' => 'Peugeot 308',
        ]);
    }
}
