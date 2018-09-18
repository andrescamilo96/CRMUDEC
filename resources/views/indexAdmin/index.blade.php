@extends('layouts.appadmin')
@section('Contenido')

 <div class="panel panel-default">
           <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title"><a href="{{ route('admin.index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true" data-toggle="tooltip"  title="Inicio"></span> </a> Menu Principal</h3>
          </div>
          <div class="panel-body">
           <div class="col-md-3">
             <div class="well dash-box">
               <h2><a href="{{ route('solicitudes.index') }}"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> {{ $Solicitudes->count() }}</h2>
               <h4>Solicitudes</h4></a>
             </div>
           </div>
           <div class="col-md-3">
             <div class="well dash-box">
               <h2><a href="{{ route('usuarios.index') }}"><span class="glyphicon glyphicon-education" aria-hidden="true"></span>{{ $userGraduado->count() }}</h2>
               <h4>Graduados</h4></a>
             </div>
           </div>
           <div class="col-md-3">
             <div class="well dash-box">
               <h2><a href="{{ route('posts.index') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{ $Posts->count() }}</h2>
               <h4>Posts</h4></a>

             </div>
           </div>
           <div class="col-md-3">
             <div class="well dash-box">
               <h2><a href="{{ route('empresa.index') }}"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> {{ $InfoEmpresa->count() }}</h2>
               <h4>Empresas</h4></a>
             </div>
           </div>
           <div class="col-md-3">
             <div class="well dash-box">
               <h2><a href="{{ route('ciudades.index') }}"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> {{ $Ciudad->count() }} </h2>
               <h4>Ciudades</h4></a>

             </div>
           </div>
           <div class="col-md-3">
             <div class="well dash-box">
               <h2><a href="{{ route('tipoestudios.index') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{ $TipoEstudios->count() }} </h2>
               <h4>Tipo Estudios</h4></a>

             </div>
           </div>

          </div>
        </div>
       

              </div>
            </div>
          </div>
        </section>



@stop