@extends('layouts.appadmin')
@section('Contenido')

 <div class="panel panel-default">
 	@if(Session::has('flash_message'))
		{{Session::get('flash_message')}}
		@endif
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title"><a href="{{ route('admin.index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true" data-toggle="tooltip" title="Inicio"></span></a> Control De Empresas</h3>
          </div>
          <div class="panel-body">
          	<table  class="table table-hover" id="dev-table">
						<thead>
							<tr>
								
								<th style="text-align: center">Sigla</th>
								<th style="text-align: center">Razon Social</th>
								

									
							</tr>
						</thead>
						<tbody>
							
							@foreach ($registro as $registro)

								<tr>
									
									
									<td  style="text-align: center">		
										 {{ $registro->sigla}} 
									</td>
									<td  style="text-align: center">{{ $registro->razonsocial }}</td>
						
									
									 <td>
										 <a class="btn btn-xs btn-success" href="{{ route('empresa.edit',$registro->id) }}"><small>
											<i class="glyphicon glyphicon-pencil"></i></small> Permitir Acceso</a>
									</td>
									<td>
										 <form  method="POST" action="{{ route('empresa.destroy',$registro->id) }} " style="display:inline">
											{!! method_field('DELETE') !!}
											{!! csrf_field() !!}
											<button class="btn btn-danger btn-xs" type="submit"><small><i class="glyphicon glyphicon-remove"></i></small> Eliminar Registro</button>
											
										</form>		 
									</td>
									
											
								</tr>
								

							@endforeach
							
						</tbody>
					</table>
          	
          </div>
 </div>


@stop