@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro de información personal del Usuario</h5>				
					
						<div class="row">
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					        	<label for="user_id">Nombre Usuario</label> 
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" readonly="true" class="form-control" name="usuario" id="usuario" value="{{$registros->user->name }}"  ></input>
									<input type="hidden" readonly="true" class="form-control" name="user_id" id="user_id" value="{{ Auth::user()->id }}"  ></input>
									{!! $errors->first('user_id','<span class=error >:message</span>') !!}
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="anograduacion">Año Graduacion</label> 

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input required type="number" readonly="true" class="form-control" name="anograduacion" id="anograduacion"  placeholder="Año de Graduación"  value="{{ $registros->anograduacion }}" /> 
									{!! $errors->first('anograduacion','<span class=error >:message</span>') !!}
								</div>
					        </div>
					        <div class="form-group" style="position: static;"> 
                     			<label for="semestregraduacion">Semestre:</label> 
								<div class="input-group"> 
									<span class="input-group-addon"><i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></span> 
									<input required type="number" readonly="true" class="form-control" name="anograduacion" id="anograduacion"  placeholder="Año de Graduación"  value="{{ $registros->semestregraduacion }}" />
									{!! $errors->first('semestregraduacion','<span class=error >:message</span>') !!} 
								</div> 
                  			</div> 
					        <div class="form-group" style="position: static;">
					            <label for="residencia">Direccion Residencia</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input required type="text" readonly="true" class="form-control" name="residencia" id="residencia"  placeholder="Dirección Actual"  value="{{ $registros->residencia  }}" />
									{!! $errors->first('residencia','<span class=error >:message</span>') !!} 
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					        	  <label for="estrato">Estrato Social</label> 
					        	<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></span>
					             <input required type="text" class="form-control" readonly="true" name="estrato" id="estrato"  placeholder="Estrato Socioeconomico" value="{{ $registros->estrato  }}" />
					             {!! $errors->first('estrato','<span class=error >:message</span>') !!}
					        	</div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="sexo">Genero</label> 
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></span>
					             <input required type="text" class="form-control" readonly="true" name="sexo" id="sexo"  placeholder="Genero" value="{{ $registros->sexo  }}" />
			                      {!! $errors->first('sexo','<span class=error >:message</span>') !!}
					        </div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					            <label for="telefono">Telefono</label> 
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" readonly="true" name="telefono" id="telefono"  placeholder="Contacto Telefonico" value="{{ $registros->telefono  }}" />
									{!! $errors->first('telefono','<span class=error >:message</span>') !!} 
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="ciudadresidencia_id">Ciudad Residencia</label>
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
					           		 <input required type="text" class="form-control" readonly="true" name="ciudadresidencia_id" id="ciudadresidencia_id"  placeholder="Ciudad Residencia" value="{{ $ciudades->ciudad }}" />
			                          {!! $errors->first('ciudadresidencia_id','<span class=error >:message</span>') !!}
					           		</div>
					        </div>
					        <div class="form-group" style="position: static;">
					           <label for="estadocivil">Estado Civil</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-heart" aria-hidden="true"></i></span>
					            <input required type="text" class="form-control" readonly="true" name="estrato" id="estrato"  placeholder="Estrato Socioeconomico" value="{{ $registros->estadocivil  }}" />
			                      {!! $errors->first('estadocivil','<span class=error >:message</span>') !!} 
					        	</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="programa_id">Programa</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></span>
					             <input required type="text" class="form-control" readonly="true" name="estrato" id="estrato"  placeholder="Estrato Socioeconomico" value="{{ $registros->programa->programa  }}" /> 
			                      {!! $errors->first('programa_id','<span class=error >:message</span>') !!}
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="descripcionperfil">Perfil</label> 
					             
									
					            <textarea readonly="true" required class= "form-control" id="descripcion" name="descripcion" data-toggle="tooltip" title="Funciones realizadas (max 250 caracteres)">{{ $registros->descripcionperfil }}
  								</textarea> 
  								{!! $errors->first('descripcionperfil','<span class=error >:message</span>') !!}
					        
					        </div>
					        
					    </div>
					</div>
						<div align="center">
					        	<a class="btn btn-warning" href="{{ route('infopersonal.edit',$registros->id) }}"><small>
											<i class="glyphicon glyphicon-pencil"></i></small> Editar</a>
								<a 	href="{{ route('home.index') }}" type="submit" class="btn btn-danger" ><small><i class="glyphicon glyphicon-home"></i></small> Inicio</a> 
					        </div>
				
				</div>
			</div>
		</div>
</div>
@stop