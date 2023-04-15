<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
       // Auth::user()->name;   /*  si quiero entregar algun valor para poder reflejarlo */
        return view('home.index');
    }
}
