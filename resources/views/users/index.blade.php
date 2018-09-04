@extends('layouts.appAdmin')
@section('Contenido')

<div class="container" style="width:100%;">
    <h1>GRADUADOS</h1>
    	<div class="row">
			
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">GRADUADOS REGISTRADOS</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Filtrar" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Buscar" />
					</div>
					<table  class="table table-hover" id="dev-table" >
						<thead>
							<tr>
								<th></th>
								<th>Nombre</th>
								<th>Email</th>
								<th>Rol</th>
								<th align="center">Consolidado</th>
								<th align="center">Notificar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td align="Center"> 
										<a class="btn btn-xs btn-warning" href="{{ route('consolidado.show',$user->id) }}">
											<small><i class="glyphicon glyphicon-search "></i></small>
										</a>
																					
									<td>{{ $user->name }} </td>
									<td >{{ $user->email }}</td>
									<td >{{ $user->role->display_name }}</td>
									<td align="center">
										<a class="btn btn-primary " href="{{ route('consolidado.pdf',$user->id) }}" target="blank">
											<small><i class="glyphicon glyphicon-download-alt "></i></small>
										</a>
										</td>
									<td align="center">
										<a class="btn btn-danger " href="{{route('usuarios.notificar',$user->id) }}" > 								
											<small><i class="glyphicon glyphicon-bullhorn "></i></small>
										</a>
										</td>
																					
								</tr>

							@endforeach
						</tbody>
					</table>

				</div>
				<!-- <div align="right" >							
					<a class="btn btn-xs btn-success" href=""><small><i class="glyphicon glyphicon-plus"></i></small> Agregar </a>
				</div> -->
			</div>
		
	</div>
 @stop