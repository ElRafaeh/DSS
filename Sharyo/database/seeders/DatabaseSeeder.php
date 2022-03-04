<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Llamamos a otro fichero de semillas
        $this->call( UserSeeder ::class );
        // Mostramos informaci�n por consola
        $this->command->info('User table seeded!' );

        // Llamamos a otro fichero de semillas
        $this->call( VehicleSeeder ::class );
        // Mostramos informaci�n por consola
        $this->command->info('Vehicle table seeded!' );

        // Llamamos a otro fichero de semillas
        $this->call( TripSeeder ::class );
        // Mostramos informaci�n por consola
        $this->command->info('Trip table seeded!' );

        // Llamamos a otro fichero de semillas
        $this->call( User_TripSeeder ::class );
        // Mostramos informaci�n por consola
        $this->command->info('User_trip table seeded!' );
    }
}
