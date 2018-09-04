@extends('layouts.app')
@section('Contenido')
<div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="{{ route('notificaciones.index') }}">
                              <img  width="64" hieght="60" src="http://sweet15py.com/wp-content/uploads/2017/08/email-icon.png">
                          </a>
                          <div class="user-name">
                              <h5>CRMUDEC - EMAIL</h5>
                          </div> 
                      </div>
                      <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              Solicitudes o Peticiones
                          </a>
                          <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                          <h4 class="modal-title">Crea tu solicitud</h4>
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
                     </div>
                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3><i class="fa fa-envelope-o" aria-hidden="true"></i> BANDEJA ENTRADA</h3>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                          
                             <div class="btn-group">
                                 <a  href="{{ route('notificaciones.index') }}" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                             </div>  
                         </div>
                          <table class="table table-inbox table-hover">
                          	<tr>
                          	<th >Asunto</th>
                          	
                          	
                          	</tr>
                            <tbody>
                            @foreach ($unreadNotifications as $unreadNotification)
                              <tr class="unread">
                                 <td>
                                 	
									<a href="{{ $unreadNotification->data['link'] }}">
										{{ $unreadNotification->data['text'] }}
									</a>
								</td>
								
                                  <td class="view-message  text-right">
                                  	<form class="pull-right" action="{{  route('notificaciones.read',$unreadNotification->id)  }}" method="POST" >
									{{ method_field('PATCH') }}
									{{ csrf_field() }}
									<button title="Marcar Como Leido" class="btn btn-danger btn-xs">
										<i class="fa fa-eye" aria-hidden="true"></i>
										
									</button>
						
								</form></td>
                                 
                                  
                              </tr>
                            @endforeach
                          </tbody>
                          </table>
                      </div>
                  </aside>
              </div>

              <div class="mail-box">
                  <aside class="sm-side">
                                                          

                   

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head2">
                          <h3><i class="fa fa-eye" aria-hidden="true"></i> MENSAJES LEIDOS</h3>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                          
                             <div class="btn-group">
                                 <a href="{{ route('notificaciones.index') }}" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                             </div>  
                         </div>
                          <table class="table table-inbox table-hover">
                          	<tr>
                          	<th >Asunto</th>
                          	<th align="center">Fecha</th>
                          	
                          	</tr>
                            <tbody>
 							 @foreach ($readNotifications as $readNotification)
                              <tr class="unread">
                                 <td>
									<a href="{{ $readNotification->data['link'] }}">
										{{ $readNotification->data['text'] }}
									</a>
								</td>

								<td> 
									{{ $readNotification->created_at }}
								</td>
                                  <td>
                                  	<form class="pull-right" action="{{  route('notificaciones.destroy',$readNotification->id)  }}" method="POST" >
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button title="Borrar"  class="btn btn-danger btn-xs" tooltip="Borrar">
										<i class="fa fa-trash" aria-hidden="true"></i>
										
									</button>
									
								</form>
								</td>
                                 
                                  
                              </tr>
                            @endforeach
                             
                          </tbody>
                          </table>
                      </div>
                  </aside>
              </div>
</div>

{{-- <div class="container">
<h1>Notificaciones</h1>
<div class="row">
	<div class="col-sm-6">
		<h2>Notificaciones No Leidas</h2>
		<ul class ="list-group">
			@foreach ($unreadNotifications as $unreadNotification)
				<li class ="list-group-item">
					<a href="{{ $unreadNotification->data['link'] }}">
						{{ $unreadNotification->data['text'] }}
					</a>
					<form class="pull-right" action="{{  route('notificaciones.read',$unreadNotification->id)  }}" method="POST" >
						{{ method_field('PATCH') }}
						{{ csrf_field() }}
						<button class="btn btn-danger btn-xs">X</button>
						
					</form>
				</li>
			@endforeach
		</ul>

	</div>

	<div class="col-sm-6">
		<h2>Notificaciones  Leidas</h2>
		<ul class ="list-group">
			@foreach($readNotifications as $readNotification)
				<li class ="list-group-item">
					<a href="{{ $readNotification->data['link'] }}">
							{{ $readNotification->data['text'] }}
					</a>
					<form class="pull-right" action="{{  route('notificaciones.destroy',$readNotification->id)  }}" method="POST" >
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<button class="btn btn-danger btn-xs">X</button>
						
					</form>
				</li>
			@endforeach
		</ul>
	</div>
</div>
	
</div> --}}

@stop