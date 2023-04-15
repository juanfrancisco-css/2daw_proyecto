<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form action="{{ route('tienda-register') }}" method="POST">
    <!--Token  me genera un identificar unico con una duracion de dos horas 
         me ayuda para evitar problemas de seguridad -->
    @csrf
    <input type="text" name="username" placeholder="Nombre de Usuario">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Validar Password">
    <input type="submit" value="Registrarse">
</form> 
</body>
</html>