@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Actualización Información Personal</h5>
					<form class="" action="{{route('infopersonal.update',$registro->id)}}"  method="post"> 
					{!! method_field('PUT') !!}
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					        	<label for="user_id">Nombre Usuario</label> 
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" readonly="true" class="form-control" name="usuario" id="usuario" value="{{ Auth::user()->name }}"  ></input>
									<input type="hidden" readonly="true" class="form-control" name="user_id" id="user_id" value="{{ Auth::user()->id }}"  ></input>
									{!! $errors->first('user_id','<span class=error >:message</span>') !!}
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="anograduacion">Año Graduacion</label> 

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input required type="number" class="form-control" name="anograduacion" id="anograduacion"  placeholder="Año de Graduación"  value="{{$registro->anograduacion }}" /> 
									{!! $errors->first('anograduacion','<span class=error >:message</span>') !!}
								</div>
					        </div>
					        <div class="form-group" style="position: static;"> 
                     			<label for="semestregraduacion">Semestre:</label> 
								<div class="input-group"> 
									<span class="input-group-addon"><i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></span> 
									<select class="form-control" id="semestregraduacion" name="semestregraduacion"> 
									@if($registro->semestre == 1 )
										<option value="1" selected>I Semestre</option> 
										<option value="2">II Semestre</option> 
									@else
										<option value="1">I Semestre</option> 
										<option value="2" selected>II Semestre</option> 
									@endif
										
									</select>
									{!! $errors->first('semestregraduacion','<span class=error >:message</span>') !!} 
								</div> 
                  			</div> 
					        <div class="form-group" style="position: static;">
					            <label for="residencia">Direccion Residencia</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="residencia" id="residencia"  placeholder="Dirección Actual"  value="{{ $registro->residencia }}" />
									{!! $errors->first('residencia','<span class=error >:message</span>') !!} 
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					        	  <label for="estrato">Estrato Social</label> 
					        	<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></span>
					             <input required type="text" class="form-control" name="estrato" id="estrato"  placeholder="Estrato Socioeconomico" value="{{ $registro->estrato }}" />
					             {!! $errors->first('estrato','<span class=error >:message</span>') !!}
					        	</div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="sexo">Genero</label> 
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></span>
					             <select class="form-control" id="sexo" name="sexo"> 
					             @if($registro->sexo == 'Masculino' )
					             	<option value="Masculino" selected>Masculino</option> 
			                        <option value="Femenino">Femenino</option>
								 @else
								 	<option value="Masculino">Masculino</option> 
			                        <option value="Femenino" selected>Femenino</option>
								 @endif

			                         
			                      </select> 
			                      {!! $errors->first('sexo','<span class=error >:message</span>') !!}
					        </div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					            <label for="telefono">Telefono</label> 
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
									<input required type="number" class="form-control" name="telefono" id="telefono"  placeholder="Telefono"  value="{{ $registro->telefono }}" />
									{!! $errors->first('telefono','<span class=error >:message</span>') !!} 
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="ciudadresidencia_id">Ciudad Residencia</label>
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
					           		 <select class="form-control" id="ciudadresidencia_id" name="ciudadresidencia_id"> 
			                            @foreach ($ciudades as $ciudades )					            		
											<option value= "{{$ciudades->id}}">{{$ciudades->ciudad}}</option>
										@endforeach
			                          </select> 
			                          {!! $errors->first('ciudadresidencia_id','<span class=error >:message</span>') !!}
					           		</div>
					        </div>
					        <div class="form-group" style="position: static;">
					           <label for="estadocivil">Estado Civil</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-heart" aria-hidden="true"></i></span>
					            <select class="form-control" id="estadocivil" name="estadocivil"> 
					            	@if($registro->estadocivil == 'Soltero')
					            		<option value="Soltero" selected>Soltero</option> 
			                        	<option value="Casado">Casado</option>
									@else
										<option value="Soltero">Soltero</option> 
			                        	<option value="Casado" selected>Casado</option>
									@endif
			                         
			                      </select>
			                      {!! $errors->first('estadocivil','<span class=error >:message</span>') !!} 
					        	</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="programa_id">Programa</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></span>
					             <select class="form-control" id="programa_id" name="programa_id"> 
			                        <option value="1">Administración de Empresas</option> 			                        
			                      </select> 
			                      {!! $errors->first('programa_id','<span class=error >:message</span>') !!}
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="descripcionperfil">Perfil</label> 
					             
									
					            <textarea required class= "form-control" id="descripcionperfil" name="descripcionperfil" data-toggle="tooltip" title="Descripcion Corta de su perfil (max 250 caracteres)"  value="{{ old('descripcionperfil') }}" > {{ $registro->descripcionperfil }}
  								</textarea> 
  								{!! $errors->first('descripcionperfil','<span class=error >:message</span>') !!}
					        
					        </div>
					        
					    </div>
					</div>
						<div align="center">
					        	<input type="submit" class="btn btn-success" value="Guardar"></input> 
					        	<a 	href="{{ route('infopersonal.index') }}" type="submit" class="btn btn-default" >Regresar</a> 
					        </div>
					</form>
				</div>
			</div>
		</div>
</div>
@stop