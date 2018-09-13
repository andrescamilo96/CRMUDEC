@extends('layouts.appadmin')
@section('Contenido')

 <div class="panel panel-default">
 	@if(Session::has('flash_message'))
		{{Session::get('flash_message')}}
		@endif
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title">Control De Noticias</h3>
          </div>
          <div class="panel-body">
          	<table  class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th></th>
								<th style="text-align: center">Titulo </th>
								<th style="text-align: center">Cuerpo</th>
								
									
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
										 {{ $registro->Titulo}} 
									</td>
									<td>{{ $registro->Cuerpo }}</td>
																	
									
									<td>
										 <form  method="POST" action="{{ route('posts.destroy',$registro->id) }} " style="display:inline">
											{!! method_field('DELETE') !!}
											{!! csrf_field() !!}
											<button class="btn btn-danger btn-xs" type="submit"><small><i class="glyphicon glyphicon-remove"></i></small> Eliminar</button>
											
										</form>		 
									</td>
											
								</tr>
								

							@endforeach
							
						</tbody>
					</table>
          	
          </div>
 </div>


@stop