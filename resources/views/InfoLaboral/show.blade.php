@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro Información Laboral</h5>
					
           			
						
						<div class="row">
					    <div class="col-md-6" style="">	
					    	<div class="form-group" style="position: static;">
					        	<label for="usuario_id">Nombre Usuario</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" readonly="true" class="form-control" name="usuario_id" id="usuario_id" value="3"  placeholder="Usuario"/>
									
								</div>
					        </div>				    	
					        <div class="form-group" style="position: static;">
					        	<label for="cargo">Cargo Laboral</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input readonly="true" required type="text" class="form-control" name="cargo" id="cargo"  placeholder="Cargo desempeñado en la empresa" value="{{ $registro->cargo }}"/>
									
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <div class="form-group" style="position: static;">
					            <label for="descripcion">Descripción del Trabajo</label>
					             
									
					            <textarea readonly="true" required class= "form-control" id="descripcion" name="descripcion" data-toggle="tooltip" title="Funciones realizadas (max 250 caracteres)">{{ $registro->descripcion }}
  								</textarea> 
  								
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="empresa">Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i></span>
									<input readonly="true" required type="text" class="form-control" name="empresa" id="empresa"  placeholder="Empresa donde trabajó" value="{{ $registro->empresa }}"/>
									
								</div>
					        </div>
					         <div class="form-group" style="position: static;">
					            <label for="anoslaborados">Años Laborados</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
									<input readonly="true" required type="number" class="form-control" name="anoslaborados" id="anoslaborados"  placeholder="Cantidad de años laborados (en números, sin comas)" value="{{ $registro->anoslaborados }}"/>
									
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="rangoingresos">Rango de Ingresos Obtenidos</label>
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-usd" aria-hidden="true"></i></span>
					            <select readonly="true" class="form-control" id="rangoingresos" name="rangoingresos">
					            	<option value="Entre 1 y 2 SMLV">Entre 1 y 2 SMLV</option>
					            	<option value="Entre 3 y 4 SMLV">Entre 3 y 4 SMLV</option>
					            	<option value="Superior a 4 SMLV">Superior a 4 SMLV</option>
					            </select>
					        </div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">		    	 				        
					       
					        <div class="form-group" style="position: static;">
					            <label for="direccionempresa">Dirección Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-road" aria-hidden="true"></i></span>
									<input readonly="true"  type="text" class="form-control" name="direccionempresa" id="direccionempresa"  placeholder="Dirección de la empresa" value="{{ $registro->direccionempresa }}"/>
									
								</div>
					    	</div>						    			    	
					        <div class="form-group" style="position: static;">
					            <label for="ciudadempresa_id">Ciudad Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<select readonly="true" class="form-control" id="ciudadempresa_id" name="ciudadempresa_id">
					            	<option value="1">Bogota</option>
					            	<option value="2">Medellin</option>
					            	<option value="3">Cali</option>
					            </select>
								</div>
					    	</div>
					    	<br/>	
					    	<div class="form-group" style="position: static;">
					            <label for="telefonoempresa">Telefono Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<input readonly="true" type="number" class="form-control" name="telefonoempresa" id="telefonoempresa"  placeholder="Telefono de Contacto" value="{{ $registro->telefonoempresa }}"/>
									
								</div>
					    	</div>
					    	<div class="form-group" style="position: static;">
					            <label for="adjuntosoporte">Adjunto Certificado Laboral</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input readonly="true" required type="file" class="form-control" name="adjuntosoporte" id="adjuntosoporte"  placeholder="Adjunte certificado Laboral en formato PDF" value="{{ $registro->adjuntosoporte }}"/>
									
								</div>
					        </div>
					        
					    </div>
					    
					    
					</div>
					<div align="center">
					        	<a class="btn btn-success" href="{{ route('infolaboral.index') }}" type="submit" class="btn btn-success" >Regresar</a> 
					        </div>
						
					

				</div>
			</div>
		</div>
</div>
@stop