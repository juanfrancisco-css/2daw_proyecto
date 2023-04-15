<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
//Importar una clase para manejar autenticaciones (cuenta con diversos methodos)
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function show (){
 //En cada contoller cuando quieres validar que el usuario esta autenticado vamos utilizar  'Auth:check'
        if(Auth::check()){
            return redirect('/home');
        }

        return view('auth.login');
    }

    public function login(LoginRequest $request){
   //Hago la llamada al methodo de mi clase 'LoginRequest'
         $credentials = $request->getCredentials();

         //si no cumple si no  coincide me quedo en la pagina de login
         if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('auth.failed');
         }

         //si son validadas se crea la sesion
         //crear un usuario de las mismas credenciales 
         $user = Auth::getProvider()->retrieveByCredentials($credentials);
    
         //Ya hay un method para hacer un login y crear nuestra sesiones
         Auth::login($user);

         //devolver un objeta que ya estamos autenticados
         return $this->authenticated($request,$user);
        }

        //una vez autenticados nos redirige a nuestra pagina de home 
        public function authenticated(Request $request){
            return redirect('/home');
        }
}
