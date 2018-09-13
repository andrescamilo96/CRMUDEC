@extends('layouts.appadmin')
@section('Contenido')
<div class="panel panel-default">
           <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title">Tipo Estudios</h3>
          </div>
          <div class="panel-body">
          	<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Filtrar" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Buscar" />
						<table  class="table table-hover" id="dev-table" >
						<thead>
							<tr>
								<th></th>
								<th>Id</th>
								<th>Tipo Estudio</th>								
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($tipoestudios as $tipoestudio)
								<tr>
									<td align="Center"> 									
												</td>									
									<td>{{ $tipoestudio->id }} </td>
									<td >{{ $tipoestudio->tipoestudio }}</td>
									<td>
										<a class="btn btn-xs btn-info" href="{{route('tipoestudios.edit',$tipoestudio->id)}}"><small>
											<i class="glyphicon glyphicon-pencil"></i></small> Editar</a>
									</td>
									<td>
										<form  method="POST" action="{{ route('tipoestudios.destroy',$tipoestudio->id) }} " style="display:inline">
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
					<a class="btn btn-xs btn-success" href="{{ route('tipoestudios.create') }}"><small><i class="glyphicon glyphicon-plus"></i></small> Agregar </a>
					<a class="btn btn-xs btn-danger" href="{{ route('admin.index') }}"><small><i class="glyphicon glyphicon-home"></i></small> Inicio </a>
				</div>
</div>

@stop