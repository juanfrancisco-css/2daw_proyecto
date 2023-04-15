<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/bienvenido', function (){
    return view('bienvenido');
})->name('bienvenido');


/*
Route::get('/register', function (){
    return view('auth.register');
});
*/
Route::get('/register', [RegisterController::class,'show'])->name('tienda-register-show');

//Nombre de la ruta     Hago la llamada a la clase (Toda la clase en si misma) method de esa clase 
Route::post('/register', [RegisterController::class,'register'])->name('tienda-register');

/*
Route::get('/login', function (){
    return view('auth.login');
})->name('tienda-login');
*/

Route::get('/login', [LoginController::class,'show'])->name('tienda-login-show');

//Nombre de la ruta     Hago la llamada a la clase (Toda la clase en si misma) method de esa clase 
Route::post('/login', [LoginController::class,'login'])->name('tienda-login');

Route::get('/home', [HomeController::class,'index'])->name('tienda-home');

Route::get('/logout', [LogoutController::class,'logout'])->name('tienda-logout');
