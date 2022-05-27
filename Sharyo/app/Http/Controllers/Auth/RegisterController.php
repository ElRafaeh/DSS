<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['digits:9', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'max:20'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = new User;

        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->password = Hash::make($data['password']);
        $user->phoneNumber = $data['phoneNumber'];
        $user->email = $data['email'];

        if($data->hasFile('photo')){   
            $file = $data['photo'];
            $nombre = $file->getClientOriginalName();
            $file->move(public_path() . '/img', $nombre);
            $user->photo=$nombre; 

        }
        else{
            $user->photo= 'public/img/userPic.png';
        }


        if($data['admin'] == 'admin1234')
        {
            $user->admin = 1;
        }
        else
        {
            $user->admin = 0;
        }

        $user->save();

        return $user;
    }
}
