@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" method="post" action="#">
						
						<div class="row">
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					        	<label for="input-id-4">Nombre Usuario</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-4">Año Graduacion</label>

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Direccion Residencia</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					        	 <label for="select-4">Estrato</label>
					        	<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></span>
					            <select class="form-control" id="select-4"></select>
					        	</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="select-6">Sexo</label>
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></span>
					            <select class="form-control" id="select-6"></select>
					        </div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					            <label for="input-id-3">Telefono</label>
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="select-1">Ciudad Residencia</label>
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
					           		 <select class="form-control" id="select-1"></select>
					           		</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="select-3">Estado Civil</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-heart" aria-hidden="true"></i></span>
					            <select class="form-control" id="select-3"></select>
					        	</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="select-5">Programa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></span>
					            <select class="form-control" id="select-5"></select>
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="select-5">Pefil</label>
					             
									
					            <textarea class= "form-control" id="Perfil" name="Perfil" data-toggle="tooltip" title="Descripcion Corta de su perfil (max 250 caracteres)">
  								</textarea> 
  								
					        
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