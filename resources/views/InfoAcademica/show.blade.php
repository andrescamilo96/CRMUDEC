@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro Información Académica</h5>
					
						<div class="row">
					    <div class="col-md-6" style="">
					    	<div class="form-group" style="position: static;">
					            <label for="select-6">Tipo de Estudios</label>
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></span>
					            <select readonly="true" class="form-control" name ="tipoestudio_id" id="tipoestudio_id">
					                <option value="1">{{ $registro->tipoestudio_id }}</option>
					            	</select>
					            	
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					        	<label for="input-id-4">Titulo Obtenido</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input readonly="true" type="text" class="form-control" name="titulo" id="titulo"  placeholder="Nombre del Título Obtenido" value="{{ $registro->titulo }}" />
									
									<input readonly="true" type="hidden" class="form-control" name="usuario_id" id="usuario_id" hidden="true" value ="3" placeholder=""/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-4">Año Finalización</label>

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
									<input  readonly="true" type="number" class="form-control" name="anofinalizacion" id="anofinalizacion"  placeholder="Año Finalización estudios" maxlength="4" value="{{ $registro->anofinalizacion }}"/>
									
								</div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Institución</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-tower" aria-hidden="true"></i></span>
									<input readonly="true" type="text" class="form-control" name="institucion" id="institucion"  placeholder="Institución" value="{{ $registro->institucion }}"/>
									

								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Adjunto Soporte</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input readonly="true" type="file" class="form-control"  name="adjuntosoporte" id="adjuntosoporte"  placeholder="Adjunte su certificado de graduación o finalización del estudio realizado" value="{{ $registro->adjuntosoporte }}"/ >
									
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Certificado Convalidación</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input readonly="true" type="file" class="form-control" name="certificadoconvalidacion" id="certificadoconvalidacion"  placeholder="Si sus estudios fueron realizados en el extranjero adjunte certificado de convalidación" value="{{ $registro->certificadoconvalidacion }}"/>
								</div>
					        </div>

					        
					    </div>
 					
					    
					</div>
						<div align="center">
					        	<a class="btn btn-success" href="{{ route('infoacademica.index') }}" type="submit" class="btn btn-success" >Regresar</a> 
					        </div>
					

				</div>

			</div>

		</div>

</div>
@stop