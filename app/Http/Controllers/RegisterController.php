<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest; //Importo su libreria para ser uso de esa clase
use App\User;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    

    //Poder mostrar la vista
    public function show(){

        //si esta autenticado va para la pagina home
        //En cada contoller cuando quieres validar que el usuario esta autenticado vamos utilizar  'Auth:check'
        if(Auth::check()){
            return redirect('/home');
        }

        //Devuelve una vista capeta.fichero
        return view('auth.register');
    }


    //Este method nos permitira crear usuarios
                        //Hago la llamada a la clase 'RegisterRequest'
    public function register(RegisterRequest $request){
    //create = methodo para crear nueestro objeto
        $user =  User::create($request->validated()); //Hara la llamada a nuestras reglas automaticamente ( method rules)
    
        /*
        tenemos dos methos para dar de altas : 

        1)  $user =  User::create($request->validated()); //Hara la llamada a nuestras reglas automaticamente ( method rules)
        2)   $request->validate([
            'name'=> 'required|unique:categories|max:255',
            'color'=>'required|max:7'
              ]);

        $user = new User;
         $user->name=$request->name;
         $user->color=$request->color;
        $user->save();
        */

        return redirect()->route('tienda-login')->with('success','Cuenta creada exitosamente');
    }
}
