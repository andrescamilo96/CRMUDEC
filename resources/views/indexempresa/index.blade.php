@extends('layouts.appEmpresa')
@section('Contenido')
	
	<div class="panel panel-default">
 	@if(Session::has('flash_message'))
		{{Session::get('flash_message')}}
		@endif
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title">Panel Principal</h3>
          </div>
          <div class="panel-body">

          	@foreach ($registros as $registro)
	         	@if($registro->validadorempresa == 0)
	         		<div align="center"><h2>Estimado empresario, su información aún no ha sido validada después de 48 horas, Contacte la Administración de la Universidad, o corrija la información ingresada</div>
	         		<a href="{{ route('indexempresa.edit',$registro->id) }}">Editar Información Básica Empresa</a>
	         	@elseif($registro->validadorempresa !=0)
	         		<a href="{{ route('indexempresa.edit', $registro->id) }}"></a>
	         		<a href="">Listar Usuarios</a>
	         	@endif

	         	<!-- <div><a href="{{route('empresa.create')}}">Registre Informacion Empresarial</a></div> -->
	         	
	          	
	        @endforeach
          	
          	
          </div>
 </div>


@stop