@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro Información Académica</h5>
					<form   action="{{ route('infoacademica.store') }}" method="post">
						{!! csrf_field() !!}
						<div class="row">
					    <div class="col-md-6" style="">
					    	<div class="form-group" style="position: static;">
					            <label for="select-6">Tipo de Estudios</label>
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></span>
					            <select class="form-control" name ="tipoestudio_id" id="tipoestudio_id">
					                <option value="1">Diplomado</option>
					            	
					            	<option value="2" >Certificacion</option>
					            	 <option value="3">Especializacion</option>
					            	
					            	<option value="4" >Maestria</option>
					            	<option value="5" >Doctorado</option>
					            	
					            	</select>
					            	{{ $errors->first('tipoestudio_id') }}
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					        	<label for="input-id-4">Titulo Obtenido</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="titulo" id="titulo"  placeholder="Nombre del Título Obtenido" value="{{ old('titulo') }}" />
									{!! $errors->first('titulo','<span class=error >:message</span>') !!}
									<input type="hidden" class="form-control" name="usuario_id" id="usuario_id" hidden="true" value ="3" placeholder="Nombre del Título Obtenido"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-4">Año Finalización</label>

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
									<input required type="number" class="form-control" name="anofinalizacion" id="anofinalizacion"  placeholder="Año Finalización estudios" maxlength="4" value="{{ old('anofinalizacion') }}"/>
									{!! $errors->first('anofinalizacion','<span class=error>:message</span>') !!}
								</div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Institución</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-tower" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="institucion" id="institucion"  placeholder="Institución" value="{{ old('institucion') }}"/>
									{!! $errors->first('institucion','<span class=error>:message</span>') !!}

								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Adjunto Soporte</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input required type="file" class="form-control"  name="adjuntosoporte" id="adjuntosoporte"  placeholder="Adjunte su certificado de graduación o finalización del estudio realizado" value="{{ old('adjuntosoporte') }}"/ >
									{!! $errors->first('adjuntosoporte','<span class=error>:message</span>') !!}

								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Certificado Convalidación</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="certificadoconvalidacion" id="certificadoconvalidacion"  placeholder="Si sus estudios fueron realizados en el extranjero adjunte certificado de convalidación"/>
								</div>
					        </div>

					        
					    </div>
 					
					    
					</div>
						<div align="center">
							
						<input class ="btn btn-success" type="submit" value="Enviar"></input>
						
						</div>
					</form>

				</div>

			</div>

		</div>

</div>

@stop