
@extends('layouts.app-master')

@section('content-3')
<div class="container form-login">
    <h2>Iniciar Sesion </h2>
    <form action="{{ route('tienda-login') }}" method="post">
        @csrf
        <div class="form-floating mb-3" >
          
            <input type="text" name="username" id="Email-Username" class="form-control" placeholder="Usuario/Email">
            <label for="Email-Username">Usuario/Email</label>
        </div>
        <div class="form-floating mb-3">
           
            <input type="password" name="password" id="password" class="form-control" placeholder="Clave">
            <label for="Clave">Clave</label>
        </div>
       <a  href="{{ route('tienda-register')}}">Crear una cuenta</a><br>
        <input type="submit" value="Login" class="btn btn-primary btn-login">
</div>
@endsection
