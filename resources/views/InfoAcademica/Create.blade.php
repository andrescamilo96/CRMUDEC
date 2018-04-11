@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro Información Académica</h5>
					<form class="" method="post" action="#">
						
						<div class="row">
					    <div class="col-md-6" style="">
					    	<div class="form-group" style="position: static;">
					            <label for="select-6">Tipo de Estudios</label>
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></span>
					            <select class="form-control" id="select-6"></select>
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					        	<label for="input-id-4">Titulo Obtenido</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Nombre del Título Obtenido"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-4">Año Finalización</label>

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Año Finalización estudios"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Institución</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-tower" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Institución"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Adjunto Soporte</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="name" id="name"  placeholder="Adjunte su certificado de graduación o finalización del estudio realizado"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Certificado Convalidación</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="name" id="name"  placeholder="Si sus estudios fueron realizados en el extranjero adjunte certificado de convalidación"/>
								</div>
					        </div>
					        
					    </div>
					    
					</div>
						
					</form>
				</div>
			</div>
		</div>
</div>
@stop