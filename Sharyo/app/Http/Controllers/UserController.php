<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\CapaServicios\ServiceTravel;
use Image;

class UserController extends Controller
{
    public function historial()
    {
        $travelService = new ServiceTravel;
        $travels = $travelService->getTripsByEmail(Auth::user()->email);

        return view('users.historial')->with('travels', $travels);
    }

    public function index()
    {
        $users = User::orderBy('surname', 'asc')
                        ->paginate(5)
                        ->appends(request()->query());
        return view('users.index')->with('users', $users);
    }

    public function principalSelected(Request $request)
    {
          
        $users = User::orderBy($request->type, $request->order)->paginate($request->paginate)->appends(request()->query());
        return view('users.index')->with('users', $users);
    }

    public function search(Request $request)
    {
        $buscar=$request->get('busqueda');
        $users = User::where('name', 'LIKE', '%' .$buscar. '%')
                    ->orWhere('surname', 'LIKE', '%' .$buscar. '%')
                    ->orderBy('surname', 'asc')
                    ->paginate(5);
  
        return view('users.index',compact('users'));
    }

    public function show()
    {
        return view('users.create');
    }

    // Insertar
    public function store(Request $request)
    {
        $request->validate([
            'phoneNumber' => 'digits:9|numeric',
            'email' => 'email:rfc|unique:users',
            'password' => 'min:8|max:20',
        ]);
            
        $user = new User;

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->admin = $request->admin;

        $user->save();

        return redirect('/users');
    }

  

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit')->with('user', $user);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phoneNumber' => 'required|digits:9|numeric',
            'oldpassword' => 'required',
            ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->phoneNumber = $request->phoneNumber;


        if(Hash::check($request->oldpassword, Auth::user()->password)){
            if($request->newPassword){
                if($request->newPassword == $request->reNewPassword){
                    $user->password = Hash::make($request->newPassword);
                }
                else{
                    return redirect('/userProfile')->with('alert', "Las contraseñas no coinciden");

                }
            }
            $user->update();
            return redirect('/userProfile')->with('status', "Los cambios se han realizado con éxito");
        }
        else{
            return redirect('/userProfile')->with('alert', "Contraseña incorrecta");

        }


        
    }

    public function uploadPic($email)
    {
        $user = User::find($email);
        return view('profiles.uploadPic')->with('user', $user);
    }
    
    public function changePic(Request $request, $email)
    {
        $request->validate([
            'photo' => 'required',
            ]);
        $user = User::find($email);
        if($request->hasFile('photo')){
            $photo=$request->file('photo');
            $filename=$photo->getClientOriginalName();
            $ruta=public_path('/public/img/');
            $photo->move($ruta, $filename);
            $user->photo=$filename;
            $user->save();
            return redirect('/userProfile')->with('status', "Los cambios se han realizado con éxito");
        }
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
