@extends('layouts.appempresa')
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
								<th align="center">Contactar</th>
								
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
										 <a class="btn btn-danger"href="#myModal" data-toggle="modal"  title="" >
                              				Ir
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

	 <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                          <h4 class="modal-title">Crea tu solicitud</h4>
                                          <h5 style="color: red" class="modal-title">Recuerda que te pondras  en contacto con la univerisad.Debes escribir el nombre del graduado y asi enviaremos la informacion que solicites</h5>
                                      </div>
                                      <div class="modal-body">
                                         <form class="" action="{{route('solicitudes.store')}}"  method="post"> 
					           			 {!! csrf_field() !!} 
											
											
										        <div class="form-group" style="position: static;">
										        	<label for="user">Nombre Usuario</label> 
										            	<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
														<input type="text" readonly="true" class="form-control" name="usuario" id="usuario" value="{{ Auth::user()->name }}"  ></input>
														<input type="hidden" readonly="true" class="form-control" name="usuario_id" id="usuario_id" value="{{ Auth::user()->id }}"  ></input>
														{!! $errors->first('usuario_id','<span class=error >:message</span>') !!} 
													</div>
										        </div>
										        <div class="form-group" style="position: static;">
										            <label for="anograduacion">Correo Electrónico</label> 

										            	<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
														<input required type="email" class="form-control" name="correo" id="correo"  placeholder="Correo de Respuesta"  value="{{ old('correo') }}" /> 
														{!! $errors->first('correo','<span class=error >:message</span>') !!}
													</div>
										        </div>					       
										        <div class="form-group" style="position: static;">
										            <label for="asunto">Asunto</label> 
										             <div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
														<input required type="text" class="form-control" name="asunto" id="asunto"  placeholder="Asunto de Contacto"  value="{{ old('asunto') }}" />
														{!! $errors->first('asunto','<span class=error >:message</span>') !!} 
													</div>
										        </div>
										        <div class="form-group" style="position: static;">
										            <label for="telefono">Telefono de Contacto</label> 
										            <div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
														<input required type="number" class="form-control" name="telefono" id="telefono"  placeholder="Telefono de Contacto"  value="{{ old('telefono') }}" />
														{!! $errors->first('telefono','<span class=error >:message</span>') !!} 
													</div>
												</div>
												<div class="form-group" style="position: static;">
										             <label for="solicitud">Solicitud</label> 
										             													
										             <div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span> 
													<textarea required class= "form-control" id="solicitud" name="solicitud" data-toggle="tooltip" title="Descripción Solicitud"  value="{{ old('solicitud') }}" > 
					  								</textarea> 
					  								{!! $errors->first('solicitud','<span class=error >:message</span>') !!}
					  							    </div>
										        	<input required type="hidden" class="form-control" name="indrespuesta" id="indrespuesta"    value="0" />
										        </div>
										        
										        
										        
										    
											<div align="center">
										        	<input type="submit" class="btn btn-success" value="Guardar"></input> 
										        </div>
										</form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
 @stop