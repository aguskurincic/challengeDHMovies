<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/entry.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="top_bar">
        <a class="navbar-brand" href="/">Pelis CH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/verListadoPeliculas">Titulos <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline" action="/peliculaEncontrada" method=GET>
            <input class="form-control" type="search" placeholder="Pelicula..." name="busqueda">
            <button class="btn btn-primary" type="submit">Buscar</button>
          </form>
        </div>

        <ul class="menu_bar" id="headerbar">
        @guest
          <li class="botones"><a href="/register">Regitrarse</a></li>
          <li class="botones"><a href="/login">Login</a></li>

        @else
        <div class="logcuenta">
          <li>
            <span class='saludo'>{{Auth::user()->name}}</span>
          </li>

          <li>
            <a id="botonlog" style="margin-right: 5px" class="btn btn-warning" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                @csrf
            </form>
          </li>
        </div>
        @endif
      </ul>
      </nav>
    </header>

    @yield('content')

    <footer>
      <nav class ="footer_bar" id="footerlinks">
        <div class="menu_bar">
          <li class="botones"><a href="#"><i class="fa fa-facebook-square"></i></a></li>

          <li class="botones"><a href="#"><i class="fa fa-instagram"></i></a></li>

          <li class="botones"><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </div>
      </nav>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
