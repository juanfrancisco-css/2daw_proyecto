<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('/css/custome.css') }}" rel="stylesheet">
   
   <!-- <link rel="StyleSheet" href="{{ url('assets/css/bootstrap.min.css')}}">-->
</head>
<body>
<div class="container"> 
@include('layouts.navbars')
</div>
<main class="container">
    @yield('content-3')
</main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="{{ asset('/js/app2.js') }}"></script>
<!--<script src="{{ url('assets/js/bootstrap.bundle.min.js.map')}}"></script>-->
</body>
</html>