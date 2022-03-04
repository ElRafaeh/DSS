<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travels')->delete();
        DB::table('travels')->insert([
            'trip_id' => 1,
            'user_id'=> 'mariapalotes@hola.com',
            
        ]);
    }
}
