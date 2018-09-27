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
													<div class="form-group" style="position: static;">
										             <label for="solicitud">Solicitud</label> 
										             
														
										            <textarea required class= "form-control" id="solicitud" name="solicitud" data-toggle="tooltip" title="Descripción Solicitud"  value="{{ old('solicitud') }}" > 
					  								</textarea> 
					  								{!! $errors->first('solicitud','<span class=error >:message</span>') !!}
										        	<input required type="hidden" class="form-control" name="indrespuesta" id="indrespuesta"    value="0" />
										        </div>
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
                          <h3><i class="fa fa-envelope-o" aria-hidden="true"></i> Mensaje para {{ $registro->usuario->name }} cordial saludo </h3>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                          
                             <div class="btn-group">
                                 <a  href="{{ route('notificaciones.index') }}" class="btn mini tooltips">
                                     <i class=" fa fa-arrow-circle-left"></i>
                                 </a>
                                
                             </div>  
                         </div>
                          <table class="table table-inbox table-hover">
                            <tbody>
                           
                              <tr class="unread">
                                 <td>
                                 	<label for="solicitud">Respuesta</label> 
                                 	<textarea  rows=5 cols=90 readonly="true" name="respuesta" value="">{{ $registro->solicitudrespuesta }}</textarea>
																	
								</td>
                                 
                                 
                                  
                              </tr>
                            
                          </tbody>
                          </table>
                      </div>
                  </aside>
              </div>

<p> </p>

@stop