<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trip_user')->insert([
            'user_email' => 'jesus@gmail.com',   
            'trip_id' => '1' 
        ]);

        DB::table('trip_user')->insert([
            'user_email' => 'jesus@gmail.com',   
            'trip_id' => '2' 
        ]);

        DB::table('trip_user')->insert([
            'user_email' => 'jesus@gmail.com',   
            'trip_id' => '4' 
        ]);

        
    }
}
