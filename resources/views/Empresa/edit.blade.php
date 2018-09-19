@extends('layouts.appadmin')
@section('Contenido')
 <div class="panel panel-default">
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title"> <a href="{{ route('empresa.index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true" data-toggle="tooltip" title="Inicio"></span></a> Control Empresas</h3>
          </div>
          <div class="panel-body">
<div class ="fondo">
	 	
			<div class="row main">
				<div class="main-login main-center">
				<h5 align="center">Estimado Administrador, en este espacio podrá validar la empresa,  Por favor validar  detalladamente para dar una respuesta adecuada a esta  solicitud.</h5>
					<form class="" action="{{route('empresa.update',$registro->id)}}"  method="post"> 
           			{!! method_field('PUT') !!} 
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-12" style="">
					        <div class="form-group" style="position: static;">
					            <label for="asunto">Nit Empresa</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input readonly="true" required type="text" class="form-control" name="nit" id="nit"  placeholder="Digite aqui el Nit"  value="{{ $registro->nit }}" />
									<!-- {!! $errors->first('nit','<span class=error >:message</span>') !!}  -->
								</div>
					        </div>
					        	<div class="form-group" style="position: static;">
					            <label for="anograduacion">Correo Electrónico</label> 

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input required  readonly="true"  class="form-control" name="razonsocial" id="razonsocial"  placeholder=""  value="{{ $registro->razonsocial }}" /> 
									<!-- {!! $errors->first('razonsocial','<span class=error >:message</span>') !!} -->
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="anograduacion">Sigla</label> 

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education" aria-hidden="true"></i></span>
									<input required  readonly="true"  class="form-control" name="sigla" id="sigla"  placeholder=""  value="{{ $registro->sigla }}" /> 
									<!-- {!! $errors->first('sigla','<span class=error >:message</span>') !!} -->
								</div>
					        </div>					       
					        <div class="form-group" style="position: static;">
					            <label for="asunto">Direccion</label> 
					             <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
									<input readonly="true" required type="text" class="form-control" name="direccion" id="direccion"  placeholder=""  value="{{ $registro->direccion }}" />
									<!-- {!! $errors->first('direccion','<span class=error >:message</span>') !!}  -->
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="telefono">Telefono</label> 
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
									<input readonly="true" required type="text" class="form-control" name="telefono" id="telefono"  placeholder="Telefono de Contacto"  value="{{ $registro->telefono }}" />
									<!-- {!! $errors->first('telefonocontacto','<span class=error >:message</span>') !!}  -->
								</div>
								
							<div class="form-group" style="position: static;">
					            <label for="telefono">E-Mail</label> 
					            <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
									<input readonly="true" required type="email" class="form-control" name="email" id="email"    value="{{ $registro->email }}" />
									<!-- {!! $errors->first('email','<span class=error >:message</span>') !!}  -->
								</div>

  								<input type="hidden" readonly="true" class="form-control" name="usuario_id" id="usuario_id" value="{{ $registro->usuario_id }}"  ></input>
									<!-- {!! $errors->first('usuario_id','<span class=error >:message</span>') !!} -->

								<input type="hidden" readonly="true" class="form-control" name="ciudad_id" id="ciudad_id" value="{{ $registro->ciudad_id }}"  ></input>
									<!-- {!! $errors->first('ciudad_id','<span class=error >:message</span>') !!} -->

  								<input type="hidden" readonly="true" class="form-control" name="validadorempresa" id="validadorempresa" value="1"  ></input>
  								<br/><br/>
									<!-- {!! $errors->first('validadorempresa','<span class=error >:message</span>') !!} -->
									
  							</div>
					        </div>
					        </div>
					        </div>

					        
					    </div>
					</div>
						<div align="center">
						<iframe src="http://versionanterior.rues.org.co/RUES_Web/Consultas" width="100%" height="450px"></iframe>
							<!-- <a   class="btn  btn-danger" href="http://versionanterior.rues.org.co/RUES_Web/Consultas" target="blank"><small>
										 <i class="glyphicon glyphicon-minus"></i></small> Comprobar</a>  -->
					        	<input type="submit" class="btn btn-success" value="Validar Empresa"></input>

					        	

					        </div>
					</form>
				</div>
			</div>
		
</div>
     </div>
 </div>

@stop