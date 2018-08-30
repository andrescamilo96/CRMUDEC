@extends('layouts.appEmpresa')
@section('Contenido')
	
	<div class="panel panel-default">
 	@if(Session::has('flash_message'))
		{{Session::get('flash_message')}}
		@endif
          <div class="panel-heading" style="background-color:  #02adff;">
            <h3 class="panel-title">Panel Principal</h3>
          </div>
          <div class="panel-body">

          	@foreach ($registros as $registro)
	         	@if($registro->validadorempresa == 0)    
	         		<div id="myModal" class="modal fade" role="dialog">
	         			<div class="modal-dialog">    				                    
		                    <div class="modal-content">
		                        <div class="modal-header">
		                            <button type="button" class="close" data-dismiss="modal">&times;</button>
		                            <h4 class="modal-title" style="font-size:large;font-weight:bold;color:#003300" align="center">AVISO IMPORTANTE</h4>
		                        </div>
		                        <div class="modal-body" style="font-weight:bold">
		                            <p>Señor Empresario, su información aún no ha sido validada</p>
		                            <p>Si tiene información básica por corregir puede hacerlo</p>
		                            <p>Una vez su información sea validada será notificado y podra navegar la página. De no ser 
		                            aprobada su solicitud se le notificará y se eliminará la información ingresada</p>
		                            <p>Recuerde ingresar información veridica, su usuario se validará por medio del nit y/o razón social ingresada y se notificará via correo electrónico</p>
		                            

		                        </div>
		                        <div class="modal-footer">
		                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->
		                        </div>
		                    </div>
		                </div>
            		</div>
	         	@elseif($registro->validadorempresa !=0)	         		
	         		<input type="hidden" value="{{$registro->id}}"></input>
	         		<a href="{{ route('indexempresa.edit',$registro->id) }}">Editar Información Básica Empresa</a>
	         	@endif

	         	
	         	
	          	
	        @endforeach
          	
          	
          </div>
 </div>


@stop