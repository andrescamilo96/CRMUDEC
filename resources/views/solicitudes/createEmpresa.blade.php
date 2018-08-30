@extends('layouts.appEmpresa')
@section('Contenido')
<div class="panel panel-default">
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title">Control De Solicitudes</h3>
          </div>
	@foreach ($registros as $registro) 
	@if($registro->validadorempresa != 0)
	
          <div class="panel-body">
	
			<div class="row main">
				<div class="main-login main-center">
				<h5 align="center">Estimado empresario, en este espacio podrá ponerse en conctaco con la universidad, realizar peticiones sobre informacion de un graduado, observaciones o Solicitudes con el Programa. Por favor diligencie el formulario detalladamente para dar una respuesta adecuada a su solicitud.</h5>
					<form class="" action="{{route('solicitudes.store')}}"  method="post"> 
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-12" style="">
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
					             
					             <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span> <textarea required class= "form-control" id="solicitud" name="solicitud" data-toggle="tooltip" title="Descripción Solicitud"  value="{{ old('solicitud') }}" > 
  								</textarea> 
  								{!! $errors->first('solicitud','<span class=error >:message</span>') !!}
  							    </div>
					        	<input required type="hidden" class="form-control" name="indrespuesta" id="indrespuesta"    value="0" />
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
	
		@elseif($registro->validadorempresa ==0)
			<div align="center"><h2>Estimado empresario, su información aún no ha sido validada después de 48 horas, Contacte la Administración de la Universidad, o corrija la información ingresada</h2></div>
		@endif
		@endforeach
	</div>

@stop