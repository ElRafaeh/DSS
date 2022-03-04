<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use DB;
use Exception;

class UserTest extends TestCase
{
    /**
     * A basic unit test example. Al acabar el test, borra el usuario de la bd
     *
     * @return void
     */
    public function testUserInserts()
    {
        $user = new User();
        $user->name = 'Rafael';
        $user->surname = 'Bustos Moreno';
        $user->email = 'rbm71@alu.ua.es';
        $user->password = 'CALABAZA';
        $user->phoneNumber = 654367283;
        $user->save();

        $this->assertDatabaseHas('users', ['email' => 'rbm71@alu.ua.es']);
        DB::table('users')->where('email', '=', 'rbm71@alu.ua.es')->delete();
    }

    // Para este test, se debe haber ejecutado el seeder anteriormente.
    public function testUserSeederWorks()
    {
        $this->assertDatabaseHas('users', ['email' => 'mariapalotes@hola.com']);
    }

    // Con este test se comprueba que no se puede insertar un duplicado en la clave primaria de la bd
    // Se debe lanzar antes el seeder
    public function testSameValuePrimaryKey()
    {
        $user = new User();
        $user->name = 'Maria';
        $user->surname = 'Palotes';
        $user->email = 'mariapalotes@hola.com';
        $user->password = 'queri';
        $user->phoneNumber = 666666661;

        try {
            $user->save();
        } catch(Exception $e) {
            $this->assertTrue(true);
            return;
        }

        $this->assertTrue(false);
    }

}
