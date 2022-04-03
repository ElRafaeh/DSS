<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Insertar
    public function insert(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->password = $request->password;
        
        $user->save();

        return response([
                'name'=>(isset($user->name) ? $user->name:''),
                'surname'=>(isset($user->surname) ? $user->surname:''),
                'phoneNumber'=>(isset($user->phoneNumber) ? $user->phoneNumber:''),
                'email'=>(isset($user->email) ? $user->email:''),
                'password'=>(isset($user->password) ? $user->password:'')
            ], 200);
    }

    //
    public function update(Request $request, $name)
    {
        $user = User::find($name);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->phoneNumber = $request->phoneNumber;
        $request->email;

        $user->save();

        return response([
            'name'=>(isset($user->name) ? $user->name:''),
            'surname'=>(isset($user->surname) ? $user->surname:''),
            'phoneNumber'=>(isset($user->phoneNumber) ? $user->phoneNumber:''),
            'email'=>(isset($user->email) ? $user->email:''),
            'password'=>(isset($user->password) ? $user->password:'')
        ], 200);
    }

    //
    public function delete($name)
    {
        $user = User::find($name);

        $user->delete();

        return response([
            'name'=>(isset($user->name) ? $user->name:''),
            'surname'=>(isset($user->surname) ? $user->surname:''),
            'phoneNumber'=>(isset($user->phoneNumber) ? $user->phoneNumber:''),
            'email'=>(isset($user->email) ? $user->email:''),
            'password'=>(isset($user->password) ? $user->password:'')
        ], 200);
    }

    //
    public function getAll()
    {
        $user = User::get();
        return response("hola", 200);
    }
}
