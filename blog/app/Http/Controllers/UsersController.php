<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }
    public function getUsers(){
        /** selec *  from users */
        $data = User::all();
       // dd($data);
        return view('admin.users')
        ->with('usuarios',$data);
    }
    public function createUsers(Request $request){
     //dd($request->email);

     //Reglas de validacion 
     $request->validate([
        'name'=>'required|min:3',
        'nickname'=>'required|min:2|unique:users,nickname',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:4',
        'password2'=>'required|min:4|same:password'
     ]);

     //guardar registro
        $user = new User();
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->img = "default.jpg";
        $user->save();

        dd("Usuario creado");
        return redirect()-back()->with('success','Usuario creado correctamente');

    }
}
