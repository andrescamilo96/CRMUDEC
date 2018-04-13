@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" action="{{route('infopersonal.store')}}"  method="post"> 
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					        	<label for="user_id">Nombre Usuario</label> 
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" readonly="true" class="form-control" name="user_id" id="user_id" value="3"  placeholder="Enter your Name"/> 
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="anograduacion">Año Graduacion</label> 

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="anograduacion" id="anograduacion"  placeholder="Año de Graduación"/> 
								</div>
					        </div>
					        <div class="form-group" style="position: static;"> 
                     			<label for="semestregraduacion">Semestre:</label> 
								<div class="input-group"> 
									<span class="input-group-addon"><i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></span> 
									<select class="form-control" id="semestregraduacion" name="semestregraduacion"> 
										<option value="1">I Semestre</option> 
										<option value="2">II Semestre</option> 
									</select> 
								</div> 
                  			</div> 
					        <div class="form-group" style="position: static;">
					            <label for="residencia">Direccion Residencia</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="residencia" id="residencia"  placeholder="Dirección Actual"/> 
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					        	  <label for="estrato">Estrato Social</label> 
					        	<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></span>
					             <input type="text" class="form-control" name="estrato" id="estrato"  placeholder="Estrato Socioeconomico"/>
					        	</div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="sexo">Sexo</label> 
					            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i></span>
					             <select class="form-control" id="sexo" name="sexo"> 
			                        <option value="Masculino">Masculino</option> 
			                        <option value="Femenino">Femenino</option> 
			                      </select> 
					        </div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">
					        <div class="form-group" style="position: static;">
					            <label for="telefono">Telefono</label> 
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="telefono" id="telefono"  placeholder="Telefono"/> 
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="ciudadresidencia_id">Ciudad Residencia</label>
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
					           		 <select class="form-control" id="ciudadresidencia_id" name="ciudadresidencia_id"> 
			                            <option value="1">Bogotá</option> 
			                            <option value="2">Medellín</option> 
			                            <option value="3">Cali</option> 
			                          </select> 
					           		</div>
					        </div>
					        <div class="form-group" style="position: static;">
					           <label for="estadocivil">Estado Civil</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-heart" aria-hidden="true"></i></span>
					            <select class="form-control" id="estadocivil" name="estadocivil"> 
			                        <option value="Soltero">Soltero</option> 
			                        <option value="Casado">Casado</option> 
			                      </select> 
					        	</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="programa_id">Programa</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></span>
					             <select class="form-control" id="programa_id" name="programa_id"> 
			                        <option value="1">Administración de Empresas</option> 
			                        <option value="2">Contaduria Pública</option> 
			                      </select> 
					        </div>
					        </div>
					        <div class="form-group" style="position: static;">
					             <label for="descripcionperfil">Perfil</label> 
					             
									
					            <textarea class= "form-control" id="descripcionperfil" name="descripcionperfil" data-toggle="tooltip" title="Descripcion Corta de su perfil (max 250 caracteres)"> 
  								</textarea> 
  								
					        
					        </div>
					        
					    </div>
					</div>
						<div align="center">
					        	<input type="submit" class="btn btn-success" >Guardar</input> 
					        </div>
					</form>
				</div>
			</div>
		</div>
</div>
@stop