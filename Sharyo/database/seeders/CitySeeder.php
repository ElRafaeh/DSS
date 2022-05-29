<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Alicante',
            'state' => 'Comunidad Valenciana',
            'photo' => 'fotoAlicante.jpg'
        ]);
        DB::table('cities')->insert([
            'name' => 'Valencia',
            'state' => 'Comunidad Valenciana',
            'photo' => 'fotoValencia.jpeg'
        ]);
        DB::table('cities')->insert([
            'name' => 'Castellón',
            'state' => 'Comunidad Valenciana',
        ]);
        DB::table('cities')->insert([
            'name' => 'Jaén',
            'state' => 'Andalucía',
            'photo' => 'fotoJaen.jpg'
        ]);
        DB::table('cities')->insert([
            'name' => 'Pozo Alcón',
            'state' => 'Andalucía',
            'photo' => 'fotoPozoAlcon.jpg'
        ]);
        DB::table('cities')->insert([
            'name' => 'Sevilla',
            'state' => 'Andalucía',
        ]);
        DB::table('cities')->insert([
            'name' => 'Barcelona',
            'state' => 'Cataluña',
        ]);
        DB::table('cities')->insert([
            'name' => 'Albacete',
            'state' => 'Castilla La Mancha',
        ]);
    }
}
