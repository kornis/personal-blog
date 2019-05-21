<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @if(Auth::user())
  
      <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">Inicio<span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::user()->admin())
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{route('categories.index')}}">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.index')}}">Articulos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('images.index')}}">imagenes</a>
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
      
      @else
      <li class="nav-item active">
        <a class="nav-link" href="{{route('/login')}}">Iniciar Sesión <span class="sr-only">(current)</span></a>
      </li>
      @endif
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search-box" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>