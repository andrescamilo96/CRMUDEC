@extends('layouts.appadmin')
@section('Contenido')
<div class="panel panel-default">
	<div class="panel-heading" style="background-color:  #02adff;">
        <h3 class="panel-title"><a href="{{ route('admin.index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true" data-toggle="tooltip" title="Inicio"></span></a> Ciudades</h3>
    </div>
    <div class="panel-body">

    	<div class="panel-body">
    		<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Filtrar" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Buscar" />
					</div>
    	<table  class="table table-hover" id="dev-table" >
						<thead>
							<tr>
								<th></th>
								<th>Id</th>
								<th>Ciudad</th>								
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($ciudades as $ciudad)
								<tr>
									<td align="Center"> 									
												</td>									
									<td>{{ $ciudad->id }} </td>
									<td >{{ $ciudad->ciudad }}</td>
									<td>
										<a class="btn btn-xs btn-info" href="{{route('ciudades.edit',$ciudad->id)}}"><small>
											<i class="glyphicon glyphicon-pencil"></i></small> Editar</a>
									</td>																	
								</tr>

							@endforeach
						</tbody>
					</table>

    </div>
    <div align="right">							
					<a class="btn btn-xs btn-success" href="{{ route('ciudades.create') }}"><small><i class="glyphicon glyphicon-plus"></i></small> Agregar </a>
					<a class="btn btn-xs btn-danger" href="{{ route('admin.index') }}"><small><i class="glyphicon glyphicon-home"></i></small> Inicio </a>
				</div>
</div>
@stop