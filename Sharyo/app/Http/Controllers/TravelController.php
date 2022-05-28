<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Trip;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function create(Request $request){
        //$trip = Trip::find($id);
        
        $travel = new Travel;
        $travel->email = $request->email;
        $travel->id = $request->id;

        $travel->save();
        return redirect('/historial');
    }
}
