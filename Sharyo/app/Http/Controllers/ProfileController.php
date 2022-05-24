<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function viewUserProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('profiles.userPriv')->with('user', $user);
    }
}
