
<<!DOCTYPE html>
<html>
<head>
	<title>Hoja de vida</title>
</head>
<body>
	<div class="fondo">
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<h3>Consolidado Hoja de vida</h3>

					<div class="row">
						<h5>Información Básica</h5>
					    <div class="col-md-12" style="">	
					    	<div class="form-group" style="position: static;">
					        	<label for="name">Usuario:</label>
									<input readonly="true" type="text" class="form-control" name="name" id="name"  placeholder="Nombre del usuario" value="{{ $user->name }}" />									
					        </div>
					    </div>
					
					    <div class="col-md-6" style="">	
					        <div class="form-group" style="position: static;">
					        	<label for="input-id-4">Cédula:</label>
									<input readonly="true" type="text" class="form-control" name="cedulausuario" id="cedulausuario"  placeholder="Cédula Usuario" value="{{ $user->cedulausuario }}" />									
					        </div>
					    </div>
					    <div class="col-md-6" style="">	
					        <div class="form-group" style="position: static;">
					        	<label for="email">Correo Electrónico</label>
									<input readonly="true" type="text" class="form-control" name="email" id="email"  placeholder="Correo usuario" value="{{ $user->email }}" />									
					        </div>
					    </div>
					</div>			    					
									
					    @foreach ($infopersonal as $infopersonal)
					    	<div class="col-md-12" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="descripcionperfil">Perfil:</label>										
										<input readonly="true" type="textarea" class="form-control" name="descripcionperfil" id="descripcionperfil"  placeholder="" value="{{ $infopersonal->descripcionperfil }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="anograduacion">Año de Graduación:</label>										
										<input readonly="true" type="text" class="form-control" name="anograduacion" id="anograduacion"  placeholder="" value="{{ $infopersonal->telefono }}" />
						        </div>
						    </div>
						    <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="estadocivil">Semestre:</label>										
										<input readonly="true" type="text" class="form-control" name="semestre" id="semestre"  placeholder="" value="{{ $infopersonal->semestregraduacion }}" />
						        </div>
					        </div>
					    	<div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="telefono">Telefono:</label>										
										<input readonly="true" type="text" class="form-control" name="telefono" id="telefono"  placeholder="" value="{{ $infopersonal->telefono }}" />
						        </div>
						    </div>
						    <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="estadocivil">Estado Civil:</label>										
										<input readonly="true" type="text" class="form-control" name="estadocivil" id="estadocivil"  placeholder="" value="{{ $infopersonal->estadocivil }}" />
						        </div>
					        </div>
					        <div class="col-md-12" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="residencia">Dirección Residencia:</label>										
										<input readonly="true" type="textbox" class="form-control" name="residencia" id="residencia"  placeholder="" value="{{ $infopersonal->residencia }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="ciudadresidencia_id">Ciudad Residencia:</label>										
										<input readonly="true" type="text" class="form-control" name="ciudadresidencia_id" id="ciudadresidencia_id"  placeholder="" value="{{ $infopersonal->ciudadresidencia_id }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="estrato">Estrato SocioEconómico:</label>										
										<input readonly="true" type="text" class="form-control" name="estrato" id="estrato"  placeholder="" value="{{ $infopersonal->estrato }}" />
						        </div>
					        </div>
					    @endforeach    
						<h5>Información Académica</h5>
						@foreach ($estudios as $estudios)
							<div class="col-md-12" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="titulo">Título Obtenido:</label>										
										<input readonly="true" type="text" class="form-control" name="titulo" id="titulo"  placeholder="" value="{{ $estudios->titulo }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="estrato">Institución:</label>										
										<input readonly="true" type="text" class="form-control" name="institucion" id="institucion"  placeholder="" value="{{ $estudios->institucion }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="anofinalizacion">Año de Finalización:</label>										
										<input readonly="true" type="text" class="form-control" name="anofinalizacion" id="anofinalizacion"  placeholder="" value="{{ $estudios->anofinalizacion }}" />
						        </div>
					        </div>
						@endforeach    
						<h5>Información Laboral</h5>
						@foreach ($historialaboral as $historialaboral)
							<div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="empresa">Empresa:</label>										
										<input readonly="true" type="text" class="form-control" name="empresa" id="empresa"  placeholder="" value="{{ $historialaboral->empresa }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="cargo">Cargo Desempeñado:</label>										
										<input readonly="true" type="text" class="form-control" name="cargo" id="cargo"  placeholder="" value="{{ $historialaboral->cargo }}" />
						        </div>
					        </div>
					        <div class="col-md-12" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="empresa">Descripción Cargo:</label>										
										<textarea readonly="true" class="form-control" name="descripcion" id="descripcion"  placeholder="" >
											{{ $historialaboral->descripcion }}
										</textarea>
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="cargo">Dirección Empresa:</label>										
										<input readonly="true" type="textbox" class="form-control" name="direccionempresa" id="direccionempresa"  placeholder="" value="{{ $historialaboral->direccionempresa }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="cargo">Ciudad:</label>										
										<input readonly="true" type="text" class="form-control" name="ciudadempresa_id" id="ciudadempresa_id"  placeholder="" value="{{ $historialaboral->ciudadempresa_id }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="cargo">Telefono Empresa:</label>										
										<input readonly="true" type="text" class="form-control" name="telefonoempresa" id="telefonoempresa"  placeholder="" value="{{ $historialaboral->telefonoempresa }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="cargo">Años Laborados:</label>										
										<input readonly="true" type="text" class="form-control" name="anoslaborados" id="anoslaborados"  placeholder="" value="{{ $historialaboral->anoslaborados }}" />
						        </div>
					        </div>

						@endforeach
					</div>
			</div>
		</div>			
	</div>


</body>
</html>
	



