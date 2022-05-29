<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function viewUserProfile()
    {
        $user = User::find(Auth::user()->email);
        return view('profiles.userPriv')->with('user', $user);
    }

    public function viewUser($email)
    {
        $user = User::find($email);
        return view('profiles.userPublic')->with('user', $user);
    }

    public function viewDriver($nif)
    {
        $driver = Driver::find($nif);
        return view('profiles.driverPublic')->with('driver', $driver);
    }
}
