@extends('layouts.appAdmin')
@section('Contenido')
 <div class="panel panel-default">
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title">Control De Solicitudes</h3>
          </div>
          <div class="panel-body">
<div class ="fondo">
	 	
			<div class="row main">
				<div class="main-login main-center">
				<h5 align="center">Estimado Administrador, en este espacio podrá responder  las Sugerencias, observaciones o Solicitudes del graduado. Por favor responda el formulario detalladamente para dar una respuesta adecuada a esta  solicitud. Recuerde que una copa sera enviada al correo del graduado</h5>
					<form class="" action="{{route('solicitudes.update',$registro->id)}}"  method="post"> 
           			{!! method_field('PUT') !!} 
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-12" style="">
					        <div class="form-group" style="position: static;">
					        	<label for="user">Nombre Usuario</label> 
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" readonly="true" class="form-control" name="usuario" id="usuario" value="{{$registro->usuario->name}}"  ></input>
									<input type="hidden" readonly="true" class="form-control" name="usuario_id" id="usuario_id" value="{{ $registro->usuario_id }}"  ></input>
									<!-- {!! $errors->first('user_id','<span class=error >:message</span>') !!} -->
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="anograduacion">Correo Electrónico</label> 

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input required type="email" readonly="true"  class="form-control" name="correo" id="correo"  placeholder="Correo de Respuesta"  value="{{ $registro->correo }}" /> 
									<!-- {!! $errors->first('correo','<span class=error >:message</span>') !!} -->
								</div>
					        </div>					       
					        <div class="form-group" style="position: static;">
					            <label for="asunto">Asunto</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input readonly="true" required type="text" class="form-control" name="asunto" id="asunto"  placeholder="Asunto de Contacto"  value="{{ $registro->asunto }}" />
									<!-- {!! $errors->first('asunto','<span class=error >:message</span>') !!}  -->
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="telefono">Telefono de Contacto</label> 
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
									<input readonly="true" required type="text" class="form-control" name="telefono" id="telefono"  placeholder="Telefono de Contacto"  value="{{ $registro->telefono }}" />
									<!-- {!! $errors->first('telefonocontacto','<span class=error >:message</span>') !!}  -->
								</div>
								<div class="form-group" style="position: static;">
					             <label for="solicitud">Solicitud</label> 
					             
									
					            <textarea readonly="true" required class= "form-control" id="solicitud" name="solicitud" data-toggle="tooltip" title="Descripción Solicitud"  " > {{ $registro->solicitud }}
  								</textarea> 
  								<!-- {!! $errors->first('solicitud','<span class=error >:message</span>') !!} -->

  								<div class="form-group" style="position: static;">
					             <label for="solicitud">Responder Solicitud</label> 
					        	 <textarea required class= "form-control" id="respuesta" name="solicitudrespuesta" data-toggle="tooltip" title="Respuesta Solicitud max 250"  " > 
  								</textarea> {{ old('solicitudrespuesta') }}
  								<!-- {!! $errors->first('solicitud','<span class=error >:message</span>') !!} -->
  								<input type="hidden" readonly="true" class="form-control" name="indrespuesta" id="indrespuesta" value="1"  ></input>
									<!-- {!! $errors->first('user_id','<span class=error >:message</span>') !!} -->
  							</div>
					        </div>
					        </div>
					        
					        
					    </div>
					</div>
						<div align="center">
					        	<input type="submit" class="btn btn-success" value="Guardar"></input> 
					        </div>
					</form>
				</div>
			</div>
		
</div>
     </div>
 </div>

@stop