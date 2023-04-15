<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('/css/custome.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app2.js') }}"></script>
</head>
<body>
  <!--
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contenido</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mi Cuenta
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#" >Iniciar Sesion</a></li>
              <li><a class="dropdown-item" href="{{ asset('/register') }}">Crear Cuenta</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sobre Nosotros</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </div>
</nav>
-->
<!--
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href=" {{ route('tienda-home')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Contenido</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Contenido</a>
        </li>
       
      </ul>
    </div>
    <a class="navbar-brand btn-login" href="{{ asset('/register') }}">Crear Cuenta</a>
    <a class="navbar-brand btn-login" href="{{ asset('/login') }}">Iniciar Sesión</a>
  </div>
</nav>
-->
<div class="container"> 
@include('layouts.navbars')
</div>
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
<footer>
@yield('content1')
</footer>
    
</body>
</html>