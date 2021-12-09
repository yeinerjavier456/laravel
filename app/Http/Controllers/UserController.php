<?php

namespace App\Http\Controllers;

// traemos el archivo de la tabla de usuarios
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //nmuestra todos los usuarios
    public function index(){

        // utilizamos el metodo para traeer  todos los usuarios
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
       
    }
    
    // metodo dencargado de trabajar con los datos
    public function store(Request $request){
        // creamos el usuario con la informacion  suministrada
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        // retornamos la informacion a la vista anterior
        return back();
    }

    // recibimos el usuario y lo eliminamos
    public function destroy(User $user){
        /// eliminamos el usuario con el metodo de eliminar
        $user->delete();

        //// retornamos a la vista anterior
         return back();
    }


}
