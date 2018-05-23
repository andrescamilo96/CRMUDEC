@extends('layouts.app')
@section('Contenido')
<div class ="fondo">
	 	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Registro Información Empresarial</h5>
					<form class="" action="{{route('empresa.store')}}"  method="post"> 
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-6" style="">	
					    				    	
					        <div class="form-group" style="position: static;">
					        	<label for="nit">Nit Empresa</label>
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="cargo" id="cargo"  placeholder="Nit de la Emresa"/>
									{!! $errors->first('cargo','<span class=error >:message</span>') !!}
									<input type="hidden" readonly="true" class="form-control" name="usuario_id" id="usuario_id" value="{{ Auth::user()->id }}"  placeholder="Usuario"/>
									{!! $errors->first('usuario_id','<span class=error >:message</span>') !!}
								</div>
					        </div>
					        
					        <div class="form-group" style="position: static;">
					            <label for="razonsocial">Razon Social</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="razonsocial" id="razonsocial"  placeholder="Razón Social"/>
  								{!! $errors->first('razonsocial','<span class=error >:message</span>') !!}
								</div>
					        </div>
					         <div class="form-group" style="position: static;">
					            <label for="razonsocial">Sigla Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="sigla" id="sigla"  placeholder="Sigla Empresa"/>
  								{!! $errors->first('sigla','<span class=error >:message</span>') !!}
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="email">Correo Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-globe" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="email" id="email"  placeholder="Correo de Contacto"/>
  								{!! $errors->first('email','<span class=error >:message</span>') !!}
								</div>
					        </div>
					    </div>
					    <div class="col-md-6" style="">		    	 				        
					       
					        <div class="form-group" style="position: static;">
					            <label for="direccion">Dirección Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-road" aria-hidden="true"></i></span>
									<input  type="text" class="form-control" name="direccion" id="direccion"  placeholder="Dirección de la empresa"/>
									{!! $errors->first('direccion','<span class=error >:message</span>') !!}
								</div>
					    	</div>						    			    	
					        <div class="form-group" style="position: static;">
					            <label for="ciudad_id">Ciudad Empresa</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<select class="form-control" id="ciudad_id" name="ciudad_id">
					            	<option value="1">Bogota</option>
					            	<option value="2">Medellin</option>
					            	<option value="3">Cali</option>
					            </select>
								</div>
					    	</div>
					    	<br/>	
					    	<div class="form-group" style="position: static;">
					            <label for="telefonoempresa">Telefono Contacto</label>
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="telefono" id="telefono"  placeholder="Telefono de Contacto"/>
									{!! $errors->first('telefono','<span class=error >:message</span>') !!}
								</div>
					    	</div>
					    	
					        
					    </div>
					    
					    
					</div>
					<div align="center">
					        	<input type="submit" class="btn btn-success" value="Guardar"></input> 
					        </div>
						
					</form>
				</div>
			</div>
		</div>
</div>
@stop