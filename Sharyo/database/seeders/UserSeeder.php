<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


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
            'surname' => 'Plaza Ortiz',
            'admin' => 0,
            'phoneNumber' => 665347500,
            'password' => Hash::make("hola0234@"),
        ]);

        DB::table('users')->insert([
            'email' => 'jenn@gmail.com',
            'name' => 'Jennifer',
            'surname' => 'Daniela',
            'admin' => 0,
            'phoneNumber' => 789023456,
            'password' => Hash::make("hola0234@"),
        ]);

        DB::table('users')->insert([
            'email' => 'enrique@gmail.com',
            'name' => 'Kike',
            'surname' => 'Chuca',
            'admin' => 0,
            'phoneNumber' => 765487234,
            'password' => Hash::make("hola0234@"),
        ]);
    }
}
