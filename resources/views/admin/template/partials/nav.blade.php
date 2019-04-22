<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 15px; border-radius: 5px;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @if(Auth::user())
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('/')}}">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('categories.index')}}">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.index')}}">Articulos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">imagenes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tags.index')}}">Tags</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('auth.logout') }}">Salir</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    @endif
  </div>
</nav>