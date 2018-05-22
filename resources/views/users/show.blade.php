@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Usuario</h5>
					
						<div class="row">
					    <div class="col-md-12" style="">
					    	
					        <div class="form-group" style="position: static;">
					        	<label for="input-id-4">Usuario:</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input readonly="true" type="text" class="form-control" name="name" id="name"  placeholder="Nombre del usuario" value="{{ $user->name }}" />
									
									<input readonly="true" type="hidden" class="form-control" name="role_id" id="role_id" hidden="true" value ="3" placeholder=""/>
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="input-id-5">Correo electrónico:</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-tower" aria-hidden="true"></i></span>
									<input readonly="true" type="text" class="form-control" name="email" id="email"  placeholder="Correo" value="{{ $user->email }}"/>
									

								</div>
					        </div>
					    </div>
 					
					    
					</div>
						<div align="center">
					        	<a class="btn btn-success" href="{{ route('usuarios.index') }}" type="submit" class="btn btn-success" >Regresar</a> 
					        </div>
					

				</div>

			</div>

		</div>

</div>
@stop