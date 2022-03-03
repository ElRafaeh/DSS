<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Maria',
            'surname'=> 'Palotes',
            'phoneNumber'=>666666661,
            'email'=>'mariapalotes@hola.com',
            'password'=>'queri'
        ]);
    }
}
