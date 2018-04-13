@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro Información Laboral</h5>
					<form class="" method="post" action="#">
						
						<div class="row">
					    <div class="col-md-6" style="">					    	
					        <div class="form-group" style="position: static;">
					        	<label for="input-id-4">Cargo Laboral</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Cargo desempeñado en la empresa"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <div class="form-group" style="position: static;">
					            <label for="select-5">Descripción del Trabajo</label>
					             
									
					            <textarea class= "form-control" id="Perfil" name="Perfil" data-toggle="tooltip" title="Funciones realizadas (max 250 caracteres)">
  								</textarea> 
					        
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Empresa donde trabajó"/>
								</div>
					        </div>
					         <div class="form-group" style="position: static;">
					            <label for="input-id-5">Años Laborados</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Cantidad de años laborados (en números, sin comas)"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="select-6">Rango de Ingresos Obtenidos</label>
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-usd" aria-hidden="true"></i></span>
					            <select class="form-control" id="select-6"></select>
					        </div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">		    	 				        
					       
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Dirección Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-road" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Dirección de la empresa"/>
								</div>
					    	</div>						    			    	
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Ciudad Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder=""/>
								</div>
					    	</div>
					    	<br/>	
					    	<div class="form-group" style="position: static;">
					            <label for="input-id-5">Telefono Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Telefono de Contacto"/>
								</div>
					    	</div>
					    	<div class="form-group" style="position: static;">
					            <label for="input-id-5">Adjunto Certificado Laboral</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-level-up" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="name" id="name"  placeholder="Adjunte certificado Laboral en formato PDF"/>
								</div>
					        </div>
					        
					    </div>
					    
					    
					</div>
					<div align="center">
					        	<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
					        </div>
						
					</form>
				</div>
			</div>
		</div>
</div>
@stop