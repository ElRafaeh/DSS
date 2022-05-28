<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('drivers')->insert([
            'nif' => 'Y1981204C',
            'name' => 'Jennifer',
            'experience' => 3,
            'vehicle_id' => '5647 GNH'
        ]);
        DB::table('drivers')->insert([
            'nif' => '49627353T',
            'name' => 'Rafael',
            'experience' => 20,
            'vehicle_id' => '5647 GNH'
        ]);
        DB::table('drivers')->insert([
            'nif' => '90865644N',
            'name' => 'Pepe',
            'experience' => 25,
            'vehicle_id' => '5647 GNH'
        ]);
        DB::table('drivers')->insert([
            'nif' => '49214030X',
            'name' => 'Jesus',
            'experience' => 4,
            'vehicle_id' => '5647 GNH'
        ]);
        DB::table('drivers')->insert([
            'nif' => 'X2846345C',
            'name' => 'Roger',
            'experience' => 10,
            'vehicle_id' => '5647 GNH'
        ]);
        DB::table('drivers')->insert([
            'nif' => '76345654F',
            'name' => 'Mariana',
            'experience' => 5,
            'vehicle_id' => '9087 LKJ'
        ]);
        DB::table('drivers')->insert([
            'nif' => '76645654F',
            'name' => 'Luz',
            'experience' => 7,
        ]);
        
    }
}
