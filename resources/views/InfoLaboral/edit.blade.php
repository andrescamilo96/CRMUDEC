@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro Información Laboral</h5>
					<form class="" action="{{route('infolaboral.update',$registro->id)}}"  method="post" enctype="multipart/form-data">
					{!! method_field('PUT') !!} 
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-6" style="">	
					    	<div class="form-group" style="position: static;">
					        	<label for="usuario_id">Nombre Usuario</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="hidden" readonly="true" class="form-control" name="usuario_id" id="usuario_id" value="{{ Auth::user()->id }}"  placeholder="Usuario"/>
									<input type="text" readonly="true" class="form-control" name="nombre" id="nombre" value="{{ Auth::user()->name }}" />
									{!! $errors->first('usuario_id','<span class=error >:message</span>') !!}
								</div>
					        </div>				    	
					        <div class="form-group" style="position: static;">
					        	<label for="cargo">Cargo Laboral</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="cargo" id="cargo"  placeholder="Cargo desempeñado en la empresa" value="{{ $registro->cargo }}"/>
									{!! $errors->first('cargo','<span class=error >:message</span>') !!}
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <div class="form-group" style="position: static;">
					            <label for="descripcion">Descripción del Trabajo</label>
					             
									
					            <textarea required class= "form-control" id="descripcion" name="descripcion" data-toggle="tooltip" title="Funciones realizadas (max 250 caracteres)">{{ $registro->descripcion }}
  								</textarea> 
  								{!! $errors->first('descripcion','<span class=error >:message</span>') !!}
					        
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="empresa">Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="empresa" id="empresa"  placeholder="Empresa donde trabajó" value="{{ $registro->empresa }}"/>
									{!! $errors->first('empresa','<span class=error >:message</span>') !!}
								</div>
					        </div>
					         <div class="form-group" style="position: static;">
					            <label for="anoslaborados">Años Laborados</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
									<input required type="number" class="form-control" name="anoslaborados" id="anoslaborados"  placeholder="Cantidad de años laborados (en números, sin comas)" value="{{ $registro->anoslaborados }}"/>
									{!! $errors->first('anoslaborados','<span class=error >:message</span>') !!}
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="rangoingresos">Rango de Ingresos Obtenidos</label>
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-usd" aria-hidden="true"></i></span>
					            <input type="text" readonly="true" class="form-control" name="rangoingresos" id="rangoingresos" value="{{ $registro->rangoingresos }}"  placeholder="Usuario"/>
					        </div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">		    	 				        
					       
					        <div class="form-group" style="position: static;">
					            <label for="direccionempresa">Dirección Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-road" aria-hidden="true"></i></span>
									<input  type="text" class="form-control" name="direccionempresa" id="direccionempresa"  placeholder="Dirección de la empresa" value="{{ $registro->direccionempresa }}"/>
									{!! $errors->first('direccionempresa','<span class=error >:message</span>') !!}
								</div>
					    	</div>						    			    	
					        <div class="form-group" style="position: static;">
					            <label for="ciudadempresa_id">Ciudad Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<input type="hidden" name="ciudadempresa_id" id="ciudadempresa_id" value="{{ $registro->ciudadempresa_id }}"></input>
									<input type="text" readonly="true" class="form-control" name="ciudad" id="ciudad" value="{{ $ciudades->ciudad }}"  placeholder="Usuario"/>
					            </select>
								</div>
					    	</div>
					    	<br/>	
					    	<div class="form-group" style="position: static;">
					            <label for="telefonoempresa">Telefono Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="telefonoempresa" id="telefonoempresa"  placeholder="Telefono de Contacto" value="{{ $registro->telefonoempresa }}"/>
									{!! $errors->first('telefonoempresa','<span class=error >:message</span>') !!}
								</div>
					    	</div>
					    	<div class="form-group" style="position: static;">
					            <label for="adjuntosoporte">Adjunto Certificado Laboral</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input type="hidden" value="{{$registro->adjuntosoporte}}" id="adjuntosoporte" name="adjuntosoporte"></input>
									<input type="file" class="form-control"  name="adjuntosoporte" id="adjuntosoporte"  value="{{$registro->adjuntosoporte}}" / >
									{!! $errors->first('adjuntosoporte','<span class=error>:message</span>') !!}
								</div>
					        </div>
					        
					    </div>
					    
					    
					</div>
							<div align="center">
					        	<input type="submit" class="btn btn-success" ></input> 
					        	<a 	href="{{ route('infolaboral.index') }}" type="submit" class="btn btn-default" >Regresar</a> 
					        </div>
					        
					        	
					        
						
					</form>
				</div>
			</div>
		</div>
</div>
@stop