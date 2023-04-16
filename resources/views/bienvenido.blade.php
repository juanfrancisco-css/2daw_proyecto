<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app2.js') }}"></script>
</head>
<body>
@include('layouts.navbars')
<section>
  <div class="container">
  <h1>Bienvenido a nuestra tienda </h1>

  <div class="box2">
    <h2>Sobre nosotros</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Laudantium hic ut velit doloremque dolorem voluptas facere nostrum? 
      Eligendi ab magnam libero vero ipsa rem. Laborum doloremque voluptatibus voluptate asperiores nam.
  </p>
</div>
<div class="box3">
    <h2>Donde estamos</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Laudantium hic ut velit doloremque dolorem voluptas facere nostrum? 
      Eligendi ab magnam libero vero ipsa rem. Laborum doloremque voluptatibus voluptate asperiores nam.
  </p>
</div>
</div>
</section>
@include('layouts.footer')
    
</body>
</html>