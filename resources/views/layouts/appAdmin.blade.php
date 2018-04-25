<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Styles -->
            <link href="{{ asset('cssAdmin/app.css') }}" rel="stylesheet">
        </head>
        <body>
           <nav class="navbar navbar-default">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ route('admin.index') }}">Admin CRMUDEC</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('admin.index') }}">Inicio</a></li>
                    
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                         @if (auth()->user()->hasroles(['admin']))
                         <li class=""> 
                              <a  href="{{ route('usuarios.index')}}">Usuarios</a></li>
                          @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>


            <header id="header">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Bienvenido Administrador del Sitio  <small>Controla tu sitio</small></h1>
                  </div>
                  {{-- <div class="col-md-2">
                           <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Create Content
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add Pages</a></li>
            <li><a href="#">Add Posts</a></li>
            <li><a href="#">Add Users</a></li>
          </ul> --}}
        </div> 
                  </div>
                </div>
              </div>
            </header>
        <br>

          <section id="breadcrumb">
            <div class="container">
              <ol class="breadcrumb">
                <li class="active">Tablero</li>
              </ol>
            </div>
          </section>


        <section id="main">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                Control Usuarios<span class="badge"></span>
              </a>
              <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Solicitudes<span class="badge">25</span></a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts<span class="badge">126</span></a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">12</span></a>
            </div>

                <div class="well">
                  <h4>Disk Space Used</h4>
                  <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            60%
          </div>
        </div>
        <h4>Bandwidth Used</h4>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
            40%
          </div>
        </div>
                </div>
              </div>
              <div class="col-md-9">
            @yield('Contenido')

          <footer id="footer">
            <p>Copyright : Madhav Prasad<br>2017</p>
          </footer>

                    <!-- Right Side Of Navbar -->
                

       
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
