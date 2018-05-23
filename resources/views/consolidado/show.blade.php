@extends('layouts.appAdmin')
@section('Contenido')
	
		<div class="container" style="width:100%;">
			<div class="row">
				<div class="panel panel-primary">
			      <div class="panel-heading"><strong><h1 align="center">Consolidado Adjuntos Graduado</h3></strong></div>
			      <div class="panel-body">
			      		<div class="col-md-12" style="">						    	
					        	<label for="name">Usuario:</label>
									<input readonly="true" type="text" class="form-control" name="name" id="name"  placeholder="Nombre del usuario" value="{{ $user->name }}" />									
					    </div>
					
					    <div class="col-md-6" style="">						     
					        	<label for="input-id-4">Cédula:</label>
									<input readonly="true" type="text" class="form-control" name="cedulausuario" id="cedulausuario"  placeholder="Cédula Usuario" value="{{ $user->cedulausuario }}" />			
					    </div>
					    <div class="col-md-6" style="">	
					        
					        	<label for="email">Correo Electrónico</label>
									<input readonly="true" type="text" class="form-control" name="email" id="email"  placeholder="Correo usuario" value="{{ $user->email }}" />									
					    </div>
								    					
						 				
					    @foreach ($infopersonal as $infopersonal)					    	
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="anograduacion">Año de Graduación:</label>										
										<input readonly="true" type="text" class="form-control" name="anograduacion" id="anograduacion"  placeholder="" value="{{ $infopersonal->anograduacion }}" />
						        </div>
						    </div>
						    <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="estadocivil">Semestre:</label>										
										<input readonly="true" type="text" class="form-control" name="semestre" id="semestre"  placeholder="" value="{{ $infopersonal->semestregraduacion }}" />
						        </div>
					        </div>						    		        
					    @endforeach 
			      	
			      </div>
			    </div>
			    <div class="panel panel-primary">
			      <div class="panel-heading"><h3>Información Académica</h3></div>
			      <div class="panel-body">
			      		@foreach ($estudios as $estudios)
							<div class="col-md-12" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="titulo">Título Obtenido:</label>										
										<input readonly="true" type="textbox" class="form-control" name="titulo" id="titulo"  placeholder="" value="{{ $estudios->titulo }}" />
						        </div>
					        </div>
					        <div class="col-md-12" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="estrato">Institución:</label>										
										<input readonly="true" type="text" class="form-control" name="institucion" id="institucion"  placeholder="" value="{{ $estudios->institucion }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">						        	
										<a class="btn btn-primary " href="{{ $estudios->adjuntosoporte }}" target="blank">
										Adjunto Soporte
										</a>
						        </div>
					        </div>					        
					        @if($estudios->certificadoconvalidacion != NULL)
						        <div class="col-md-6" style="">
							        <div class="form-group" style="position: static;">						        	
											<a class="btn btn-primary " href="{{ $estudios->certificadoconvalidacion }}" target="blank">
											Certificado Convalidación 
											</a>
							        </div>
						        </div>						    

					        @endif					        
						@endforeach
			      </div>
			    </div>
			    <div class="panel panel-primary">
			      <div class="panel-heading"><h3>Información Laboral</h3></div>
			      <div class="panel-body">
			      		@foreach ($historialaboral as $historialaboral)
							<div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="empresa">Empresa:</label>										
										<input readonly="true" type="textbox" class="form-control" name="empresa" id="empresa"  placeholder="" value="{{ $historialaboral->empresa }}" />
						        </div>
					        </div>
					        <div class="col-md-6" style="">
						        <div class="form-group" style="position: static;">
						        	<label for="cargo">Cargo Desempeñado:</label>										
										<input readonly="true" type="textbox" class="form-control" name="cargo" id="cargo"  placeholder="" value="{{ $historialaboral->cargo }}" />
						        </div>
					        </div>
					        <div class="col-md-12" style="">
						        <div class="form-group" style="position: static;">						        	
										<a class="btn btn-primary " href="{{ $historialaboral->adjuntosoporte }}" target="blank">
										Adjunto Soporte
										</a>
						        </div>
					        </div>
					       

						@endforeach
			      </div>
			    </div>	    					
			</div>
		</div>			
	




@stop