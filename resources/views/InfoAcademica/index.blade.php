@extends('layouts.app')

@section('Contenido')

	<div class="container">
    <h1>INFORMACION ACADEMICA</h1>
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
								<th>Titulo</th>
								<th>Año Finalizacion</th>
								<th>Institucion</th>
								<th>Adjunto Soporte</th>
								<th>Certificado Convalidacion</th>
								<th>Tipo Estudio</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach ($registros as $registro)
								<tr>
									<td align="Center">
										<a class="btn btn-xs btn-warning" href="{{ route('infoacademica.show',$registro->id) }}">
											<small><i class="glyphicon glyphicon-search"></i></small>
										</a>
									<td>		
										{{ $registro->titulo }}
									</td>
									<td>{{ $registro->anofinalizacion }}</td>
									<td>{{ $registro->institucion }}</td>
									<td align="center">
									<!-- <a class="btn btn-warning " onclick="OpenSoporte('/storage/{{ $registro->adjuntosoporte }}')" target="blank"> -->									
									<a href="javascript:OpenSoporte('/storage/{{ $registro->adjuntosoporte }}');" target="blank">link</a>
											<small><i class="glyphicon glyphicon-file "></i></small>
										</a>
									</td>
									<td align="center">
										<a class="btn btn-danger " href="{{ $registro->certificadoconvalidacion }}" target="blank">
											<small><i class="glyphicon glyphicon-file "></i></small>
										</a>
									</td>
									<td>{{ $registro->tipoestudio->tipoestudio }}</td>
									
									<td>
										<a class="btn btn-xs btn-info" href="{{ route('infoacademica.edit',$registro->id) }}"><small>
											<i class="glyphicon glyphicon-pencil"></i></small> Editar</a>
									</td>
									<td>
										<form  method="POST" action="{{ route('infoacademica.destroy',$registro->id) }} " style="display:inline">
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
					<a class="btn btn-xs btn-success" href="{{ route('infoacademica.create') }}"><small><i class="glyphicon glyphicon-plus"></i></small> Agregar </a>
				</div>
			</div>
		
	</div>
	<script type="text/javascript">
	function OpenSoporte(ruta){
    window.open(ruta);
  }
	</script>


@stop