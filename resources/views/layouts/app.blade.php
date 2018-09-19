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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
     
      <!-- //For Text About slider -->
      <!-- For Service pie-chart -->
      
      <!--//For Service pie-chart -->
      <!--stylesheets-->
     
</head>

<body onload="nobackbutton();">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     @guest
                        <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    @else
                    @if (auth()->user()->hasroles(['graduado']))
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    @endif
                    @endguest
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    @guest
                        <ul class="nav navbar-nav"></ul>
                    @else
                    @if (auth()->user()->hasroles(['graduado']))
                        <ul class="nav navbar-nav">
                           <li><a href="{{ route('infopersonal.index') }}">Informacion Personal</a></li>
                           <li><a href="{{ route('infoacademica.index') }}">Registro Académico</a></li>
                           <li><a href="{{ route('infolaboral.index') }}">Registro Laboral</a></li>
                           <li><a href="{{ route('solicitudes.create') }}">PQR</a></li>
                        </ul>
                    @endif
                    @if (auth()->user()->hasroles(['admin']))
                        <ul class="nav navbar-nav">
                            <li><a  href="{{ route('usuarios.index')}}">Usuarios</a></li>
                        </ul>
                          @endif
                    @endguest
                    <!-- Right Side Of Navbar -->
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
                          <li>
                             <a href="{{ route('notificaciones.index') }}">Notificaciones   
                            @if($count = Auth::user()->unreadNotifications->count())
                                <span class="label label-danger pull-10">  {{ $count }}</span>
                            @endif
                            </a>
                          </li>
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
                </div>
            </div>
        </nav>

        @yield('Contenido')
    </div>
      <div class="footer">
      <div class="container">
              <a href='#'><i class="fa fa-twitch fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-rss fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-vine fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-flickr fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
            </span>
            <footer>
         <p>©2018 Universidad Cundinamarca | Administracion Empresas Extension Facatativa <a target="_blank">CRM-UDEC</a></p>
      </footer>
      </div>

    </div>
     
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" src="https://counter5.allfreecounter.com/private/counter.js?c=3wflxchbkch8em5s84nsjcbx7bspsm7p&down=async">
        



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
