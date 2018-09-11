@extends('layouts.app')

@section('Contenido')

	<div class="container">
    <h1>INFORMACION lABORAL</h1>
    	<div class="row">
			
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">REGISTROS</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Filtrar" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Buscar" />
					</div>
					<table  class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th></th>
								<th>Cargo</th>								
								<th>Empresa</th>
								<th>Años Laborados</th>								
								
								<th>Telefono </th>
								
							</tr>
						</thead>
						<tbody>
							@foreach ($registros as $registro)
								<tr>
									<td align="Center">
										<a class="btn btn-xs btn-warning" href="{{ route('infolaboral.show',$registro->id) }}">
											<small><i class="glyphicon glyphicon-search"></i></small>
										</a>
									<td>		
										{{ $registro->cargo }}
									</td>
									
									<td>{{ $registro->empresa }}</td>
									<td>{{ $registro->anoslaborados }}</td>																	
									<td>{{ $registro->telefonoempresa }}</td>

									<td>
										<a class="btn btn-xs btn-info" href="{{ route('infolaboral.edit',$registro->id) }}"><small>
											<i class="glyphicon glyphicon-pencil"></i></small> Editar</a>
									</td>
									<td>
										<form  method="POST" action="{{ route('infolaboral.destroy',$registro->id) }} " style="display:inline">
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
				<div align="right">							
					<a class="btn btn-xs btn-success" href="{{ route('infolaboral.create') }}"><small><i class="glyphicon glyphicon-plus"></i></small> Agregar </a>
				</div>
			</div>
		
	</div>
	

@stop