@extends('layouts.appAdmin')
@section('Contenido')
<div class="panel panel-default">
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title">Control De Noticias</h3>
          </div>
          <div class="panel-body">
<div class ="fondo">
	 	
			<div class="row main">
				<div class="main-login main-center">
				<h5 align="center">Estimado Administrador, en este espacio podrá crear Noticias,para el graduado. Por favor responda el formulario detalladamente. Recuerde que una copia sera enviada al correo de los usuarios y creara una notificacion</h5>
					<form action="{{ route('posts.store') }}"  method="post"> 
           			
           			 {!! csrf_field() !!} 
						
						<div class="row">
					    <div class="col-md-12" style="">
					        <div class="form-group" style="position: static;">
					        	<label for="user">Titulo Noticia</label> 
					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></span>
									
									<input   class="form-control" name="Titulo" id="Titulo"  placeholder="Titulo Noticia" /> 
									
								</div>
					        </div>
					        <div class="form-group" style="position: static;">
					            <label for="anograduacion">Cuerpo Noticia</label> 

					            	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></span>
									<textarea    class="form-control" name="Cuerpo" id="Cuerpo"  placeholder="Cuerpo Noticia"> 
									</textarea>
								</div>
					        </div>					       
					      
					  	<div align="center">
					        	<input type="submit" class="btn btn-success" value="Responder"></input> 
					        </div>
					</form>
				</div>
			</div>
		
</div>
     </div>
 </div>
@stop