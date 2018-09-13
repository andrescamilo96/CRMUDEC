@extends('layouts.appadmin')
@section('Contenido')
<div class="panel panel-default">
	<div class="panel-heading" style="background-color:  #02adff;">
        <h3 class="panel-title">Tipo Estudio</h3>
    </div>
    <div class="panel-body">
    	
	 	
			<div class="row main">
				<div class="main-login main-center">
				<h5 align="center">Estimado Administrador, en este espacio podrá editar el tipo estudio,para el graduado. Por favor responda el formulario detalladamente.</h5>
					<form action="{{ route('tipoestudios.update',$registro->id) }}"  method="post"> 
           			{!! method_field('PUT') !!}
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-12" style="">
					        <div class="form-group" style="position: static;">
					        	<label for="user">Tipo Estudio</label> 
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></span>									
									<input   class="form-control" name="tipoestudio" id="tipoestudio"  placeholder="" value="{{$registro->tipoestudio}}" /> 
									
									</div>
					        </div>
					        <div align="center">
							
						<input class ="btn btn-success" type="submit" value="Actualizar"></input>
						<a href="{{route('tipoestudios.index')}}" class ="btn btn-danger" type="submit" value="Regresar"><small><i class="glyphicon glyphicon-arrow-left"></i></small> Regresar</a>
						</div>
					    </div>
					    </div>
					    </form>
					 </div>
					</div>
				</div>
			</div>
		

	</div>
</div>

@stop