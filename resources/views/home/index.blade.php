
@extends('layouts.app-master')

@section('content-3')
    <h1>Home</h1>

    <!--Directiva que me verifica que el usuario esta autenticado -->
    @auth
    <!--Hacer llamar al methodo auth para que nos diga el nombre o el username -->
    <!-- Llamamos al method 'auth()' que a su vez llama al methodo 'user()' y a la vez a la propiedad 'username' -->
     <!-- Si es 'name' tiene un valor que sea  nulo muestra lo que se encuentra en la derecha  osea el 'username' -->  
    <h3>Bienvenido {{ auth()->user()->name ?? auth()->user()->username }} a nuestra tienda </h3> 
    <p> <a href="{{ route('tienda-logout') }}">Salir</a> </p>
    @endauth

    <!--Si el usuario entra como invitado sin estar autenticado -->
    @guest
        <h3>Bienvenido a nuestra Tienda </h3>
        <p> Para saber más debes de  <a href="{{ asset('/login') }}">inicia sesion</a> </p>
    @endguest

@endsection