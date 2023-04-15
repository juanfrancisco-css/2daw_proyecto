<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* Importar la libreria para poder utlizar el objeto Session */ 
use Illuminate\Support\Facades\Session;
//Importar una clase para manejar autenticaciones (cuenta con diversos methodos)
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(){

        //Hago la llamada a un objeto que se enucetra en la libreria que hemos importado
       //nos permite actuliazar , librar todo lo que se tenga que librar flush();
        Session::flush();

        //terminar la sesion
        Auth::logout();

        //redirigir al usuario a otra ruta
        return  redirect()->route('bienvenido');
       
    }
}
