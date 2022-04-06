<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    public function show()
    {
        return view('users.create');
    }

    // Insertar
    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->password = $request->password;
        
        $user->save();

        /*return response([
                'name'=>(isset($user->name) ? $user->name:''),
                'surname'=>(isset($user->surname) ? $user->surname:''),
                'phoneNumber'=>(isset($user->phoneNumber) ? $user->phoneNumber:''),
                'email'=>(isset($user->email) ? $user->email:''),
                'password'=>(isset($user->password) ? $user->password:'')
            ], 200);*/
        return redirect('/users');
    }

  

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit')->with('user', $user);
    }
    
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        //return response([$user], 200);
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->phoneNumber = $request->phoneNumber;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->update();

        return redirect('/users');
    }
    

    //
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users');
    
    }

    //
    public function getAll()
    {
        $user = User::get();
        return response("hola", 200);
    }
}
