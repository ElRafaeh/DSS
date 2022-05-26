<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'bustosmorenorafael@gmail.com',
            'name' => 'Rafael',
            'surname' => 'Bustos Moreno',
            'admin' => 1,
            'phoneNumber' => 618813679,
            'password' => Hash::make("hola0234@"),
        ]);

        DB::table('users')->insert([
            'email' => 'jesus@gmail.com',
            'name' => 'Jesus',
            'surname' => 'Plaza Moreno',
            'admin' => 0,
            'phoneNumber' => 652457222,
            'password' => Hash::make("hola0234@"),
        ]);
    }
}
