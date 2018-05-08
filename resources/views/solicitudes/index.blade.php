@extends('layouts.appAdmin')
@section('Contenido')

 <div class="panel panel-default">
 	@if(Session::has('flash_message'))
		{{Session::get('flash_message')}}
		@endif
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title">Control De Solicitudes</h3>
          </div>
          <div class="panel-body">
          	<table  class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th></th>
								<th style="text-align: center">Nombre Usurio</th>
								<th style="text-align: center">Correo</th>
								<th style="text-align: center">Asunto</th>
								<th style="text-align: center">Telefono</th>
								<th style="text-align: center">Solicitud</th>
								<th style="text-align: center"></th>
									
							</tr>
						</thead>
						<tbody>
							
							@foreach ($registro as $registro)

								<tr>
									<td align="Center">
										{{-- <a class="btn btn-xs btn-warning" href="{{ route('infoacademica.show',$registro->id) }}">
											<small><i class="glyphicon glyphicon-search"></i></small>
										</a> --}}
									<td>		
										 {{ $registro->usuario->name}} 
									</td>
									<td>{{ $registro->correo }}</td>
									<td>{{ $registro->asunto }}</td>
									<td>{{ $registro->telefono }}</td>
									<td>{{ $registro->solicitud }}</td>
									
									
									<td>
										 <a class="btn btn-xs btn-success" href="{{ route('solicitudes.edit',$registro->id) }}"><small>
											<i class="glyphicon glyphicon-pencil"></i></small> Responder</a>
									</td>
									<td>
										{{-- <form  method="POST" action="{{ route('infoacademica.destroy',$registro->id) }} " style="display:inline">
											{!! method_field('DELETE') !!}
											{!! csrf_field() !!}
											<button class="btn btn-danger btn-xs" type="submit"><small><i class="glyphicon glyphicon-remove"></i></small> Eliminar</button>
											
										</form>		 --}}
									</td>
											
								</tr>
								

							@endforeach
							
						</tbody>
					</table>
          	
          </div>
 </div>


@stop