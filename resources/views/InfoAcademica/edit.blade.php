@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro Información Académica</h5>
					<form   action="{{ route('infoacademica.update',$registro->id) }}" method="post" enctype="multipart/form-data">
						{!! method_field('PUT') !!}

						{!! csrf_field() !!}
						<div class="row">
					    <div class="col-md-6" style="">
					    	<div class="form-group" style="position: static;">
					            <label for="select-6">Tipo de Estudios</label>
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></span>
					            <select readonly="true" class="form-control" name ="tipoestudio_id" id="tipoestudio_id">
					                <option value="{{ $registro->tipoestudio->id }}">{{ $registro->tipoestudio->tipoestudio }}</option>
					            </select>
					            	{{ $errors->first('tipoestudio_id') }}
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					        	<label for="input-id-4">Titulo Obtenido</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="titulo" id="titulo"  placeholder="Nombre del Título Obtenido" value="{{ $registro->titulo }}" />
									{!! $errors->first('titulo','<span class=error >:message</span>') !!}
									<input type="hidden" class="form-control" name="usuario_id" id="usuario_id" hidden="true" value ="{{ Auth::user()->id }}" placeholder="Nombre del Título Obtenido"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-4">Año Finalización</label>

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
									<input required type="number" class="form-control" name="anofinalizacion" id="anofinalizacion"  placeholder="Año Finalización estudios" maxlength="4" value="{{ $registro->anofinalizacion }}"/>
									{!! $errors->first('anofinalizacion','<span class=error>:message</span>') !!}
								</div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Institución</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-tower" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="institucion" id="institucion"  placeholder="Institución" value="{{ $registro->institucion }}"/>
									{!! $errors->first('institucion','<span class=error>:message</span>') !!}

								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Adjunto Soporte</label>
					             <div class="input-group">

									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input type="hidden" value="{{$registro->adjuntosoporte}}" id="adjuntosoporte" name="adjuntosoporte"></input>
									<input type="file" class="form-control"  name="adjuntosoporte" id="adjuntosoporte"  value="{{$registro->adjuntosoporte}}" / >
									{!! $errors->first('adjuntosoporte','<span class=error>:message</span>') !!}

								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Certificado Convalidación</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input type="hidden" value="{{$registro->certificadoconvalidacion}}" id="certificadoconvalidacion" name="certificadoconvalidacion"></input>
									<input type="file" class="form-control" name="certificadoconvalidacion" id="certificadoconvalidacion"  value="{{$registro->certificadoconvalidacion}}" />
								</div>
					        </div>

					        
					    </div>
 					
					    
					</div>
						<div align="center">							
							<input class ="btn btn-warning" type="submit" value="Enviar"></input>						
							<a 	href="{{ route('infoacademica.index') }}" type="submit" class="btn btn-danger" ><small><i class="glyphicon glyphicon-home"></i></small> Regresar</a> 
						</div>
						<div align="center">
					        	
					    </div>
					</form>

				</div>

			</div>

		</div>

</div>
@stop