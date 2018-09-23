@extends('layouts.appempresa')
@section('Contenido')
<div class="panel panel-default">
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title"><a href="{{ route('indexempresa.index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true" data-toggle="tooltip" title="Inicio"></span></a> Actualización Datos Empresa</h3>
          </div>
          <div class="panel-body">
<div class ="fondo">
		
			<div class="row main">
				<div class="main-login main-center">
				
					<form class="" action="{{route('indexempresa.update',$registro->id)}}"  method="post"> 
								{!! method_field('PUT') !!} 
								 {!! csrf_field() !!} 
						
						<div class="row">
							<div class="col-md-6" style=""> 
														
									<div class="form-group" style="position: static;">
										<label for="nit">Nit Empresa</label>
												<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input required type="number" class="form-control" name="nit" id="nit"  placeholder="Nit de la Empresa"
									value="{{ $registro->nit }}"/>
									{!! $errors->first('nit','<span class=error >:message</span>') !!}
									<input type="hidden" readonly="true" class="form-control" name="usuario_id" id="usuario_id" value="{{ Auth::user()->id }}"  placeholder="Usuario"/>
									{!! $errors->first('usuario_id','<span class=error >:message</span>') !!}
								</div>
									</div>
									
									<div class="form-group" style="position: static;">
											<label for="razonsocial">Razon Social</label>
											 <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="razonsocial" id="razonsocial"  placeholder="Razón Social"
									value="{{ $registro->razonsocial }}"/>
									{!! $errors->first('razonsocial','<span class=error >:message</span>') !!}
								</div>
									</div>
									 <div class="form-group" style="position: static;">
											<label for="razonsocial">Sigla Empresa</label>
											 <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="sigla" id="sigla"  placeholder="Sigla Empresa"
									value="{{ $registro->sigla }}"/>
									{!! $errors->first('sigla','<span class=error >:message</span>') !!}
								</div>
									</div>
									<div class="form-group" style="position: static;">
											<label for="email">Correo Empresa</label>
											 <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-globe" aria-hidden="true"></i></span>
									<input required type="text" class="form-control" name="email" id="email"  placeholder="Correo de Contacto"
									value="{{$registro->email}}"/>
									{!! $errors->first('email','<span class=error >:message</span>') !!}
								</div>
									</div>
							</div>
							<div class="col-md-6" style="">                         
								 
									<div class="form-group" style="position: static;">
											<label for="direccion">Dirección Empresa</label>
											 <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-road" aria-hidden="true"></i></span>
									<input  type="text" class="form-control" name="direccion" id="direccion"  placeholder="Dirección de la empresa"
									value="{{$registro->direccion}}"/>
									{!! $errors->first('direccion','<span class=error >:message</span>') !!}
								</div>
								</div>                            
									<div class="form-group" style="position: static;">
											<label for="ciudad_id">Ciudad Empresa</label>
											 <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<select class="form-control" id="ciudad_id" name="ciudad_id">
												@foreach ($ciudades as $ciudad )
													<option value= "{{$ciudad->id}}">{{$ciudad->ciudad}}</option>
												@endforeach
											</select>
								</div>
								</div>
								<br/> 
								<div class="form-group" style="position: static;">
											<label for="telefonoempresa">Telefono Contacto</label>
											 <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon  glyphicon-globe" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="telefono" id="telefono"  placeholder="Telefono de Contacto" value="{{$registro->telefono}}" />
									<input type="hidden" class="form-control" name="validadorempresa" id="validadorempresa"  placeholder="validadorempresa" value="{{$registro->validadorempresa}}" />
									{!! $errors->first('telefono','<span class=error >:message</span>') !!}
								</div>
								</div>
								
									
							</div>
							
							
					</div>
					<div align="center">
										<input type="submit" class="btn btn-success" value="Actualizar"></input> 
										<a href="{{route('indexempresa.index')}}" class ="btn btn-danger" type="submit" value="Regresar"><small><i class="glyphicon glyphicon-arrow-left"></i></small> Regresar</a
									</div>
						
					</form>
				</div>
			
		</div>
</div>
</div>
</div>
@stop