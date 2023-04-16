
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href=" {{ route('bienvenido')}}">Tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu-bar">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('tienda-home')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contenido 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">Contenido 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contenido 3</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link " href="#">Contenido 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contenido 5 </a>
        </li>
        @endauth
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Que deseas buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"> <i class="bi bi-search"></i></button>
        
        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           @auth
           {{ auth()->user()->name ?? auth()->user()->username }}
           @endauth
           @guest
           Cuenta
           @endguest
          
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ asset('/register') }}">Crear Cuenta</a></li>
            <li><a class="dropdown-item" href="{{ asset('/login') }}">Iniciar Sesión</a></li>
            <li><hr class="dropdown-divider"></li>
            @auth
            <li><a class="dropdown-item" href="{{ route('tienda-logout')}}">Cerrar Sesión</a></li>
            @endauth
            @guest
            <li><a class="dropdown-item disabled" href="{{ route('tienda-logout')}}"  >Cerrar Sesión</a></li>
            @endguest
          </ul>
        </li>
        
      </ul>
      </form>
    </div>
  </div>
</nav>