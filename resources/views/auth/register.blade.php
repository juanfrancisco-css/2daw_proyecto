
@extends('layouts.app-master')

@section('content-3')

<div class="container form-register">
    <h2>Create una cuenta rápido y fácil</h2>
<form action="{{ route('tienda-register') }}" method="POST">
    <!--Token  me genera un identificar unico con una duracion de dos horas 
         me ayuda para evitar problemas de seguridad -->
    @csrf
    @include('layouts.message')
    <div class="form-floating mb-3" >
          <input type="text" name="username" class="form-control" placeholder="Nombre de Usuario">
          <label for="Username">Nombre de Usuario</label>
    </div>
    <div class="form-floating mb-3" >
          <input type="email" name="email" class="form-control" placeholder="Email">
          <label for="Email">Email</label>
    </div>
    <div class="form-floating mb-3" >
          <input type="password" name="password" class="form-control" placeholder="Clave">
          <label for="password">Clave</label>
    </div>
    <div class="form-floating mb-3" >
          <input type="password" name="password_confirmation" class="form-control" placeholder="Validar Clave">
          <label for="password">Validar Clave</label>
    </div>
    <input type="submit" value="Registrarse" class="btn btn-primary">
</form> 
</div>
@endsection