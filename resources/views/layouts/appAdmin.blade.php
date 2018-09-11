<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="cache-control" content="no-store" />
<meta http-equiv="cache-control" content="must-revalidate" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Styles -->
            <link href="{{ asset('cssAdmin/app.css') }}" rel="stylesheet">
        </head>
        <body  onload="nobackbutton();">
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
              <a href="{{ route('admin.index') }}" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                Control Usuarios<span class="badge"></span>
              </a>
              <a href="{{ route('solicitudes.index') }}" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Solicitudes  </a>
              
              <a href="{{ route('posts.create') }}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Crear Posts</a>
              <a href="{{ route('usuarios.index')}}" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios <span class="badge">12</span></a>
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
            
         <p>©2018 Universidad Cundinamarca | Administracion Empresas Extension Facatativa <a target="_blank">CRM-UDEC</a>
      
          </footer>

                    <!-- Right Side Of Navbar -->
                

       
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}">
     
    


    </script>
    <script>
    function nobackbutton(){ 
   window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button" //chrome
   window.onhashchange=function(){window.location.hash="no-back-button";}
}
</script>
    @include('flashy::message')
</body>
</html>
