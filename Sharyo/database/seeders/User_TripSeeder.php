<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class User_TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trip_user')->delete();
        DB::table('trip_user')->insert([
            'trip_id' => 1,
            'user_id'=> 'mariapalotes@hola.com',  
        ]);
    }
}
