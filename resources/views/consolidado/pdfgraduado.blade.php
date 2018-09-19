
<!DOCTYPE html>
<html>
<head>
	<title>Hoja de vida</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		table{
			
    		border-collapse: collapse;
			width: 100%;
		}
		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

	</style>
	 
  
</head>
<body>
	
		<div class="container">
			
				 <div class="panel panel-default">
				      <div class="panel-heading" align="center"><h3><strong>Consolidado Hoja de Vida</strong> </h3></div>
				      <div class="panel-body">
				 </div>			      
					
					<table >
						<tr>
							<th style="width: 10%;">Nombre</td>
							<td align="left" style="padding: 8px; width:90%;"> {{ $user->name }}</td>
						</tr>
					</table>
					<table>
						<tr>
							<th style="width: 15%;">Documento</td>
							<td style="width: 35%;">{{ $user->cedulausuario }}</td>							
						</tr>
					</table>			
					
									
					    @foreach ($infopersonal as $infopersonal)
					    <table>
					    	<tr>
					    	<th style="width: 20%;">Residencia</td>
					    	<td style="width: 30%;">{{ $infopersonal->residencia }}</td>					    	
					    	</tr>
					    </table>
					    <table>
					    	<tr>					    	
					    	<th style="width: 25%;">Año Graduación</td>
					    	<td style="width: 10%;">{{ $infopersonal->anograduacion }}</td>
					    	<th style="width: 15%;">Semestre</td>
					    	<td style="width: 10%;">{{ $infopersonal->semestregraduacion }}</td>
					    	</tr>
					    </table>
					    <br/>
					    <table>
					    	<tr>
					    		<th style="width: 100%;">Perfil</td>					    		
					    	</tr>
					    	<tr>
					    		<td style="width: 100%;">{{ $infopersonal->descripcionperfil }}</td>
					    	</tr>
					    </table>
					    	
					    @endforeach    
					</div>
					</br>
      
   				 		 <div class="panel panel-default">
						      <div class="panel-heading"><h3>Estudios </h3></div>
						      <div class="panel-body">
						 </div>
						<!-- <h3>Estudios</h3> -->
						@foreach ($estudios as $estudios)
							<table>
						    	<tr>
							    	<td style="width: 30%;color:#34495E;">{{ $estudios->anofinalizacion }}</td>
							    	<th style="width: 70%;">{{ $estudios->titulo }}</td>
					    		</tr>
					   		 </table>
					   		 <table>
						    	<tr>
							    	<td style="width: 30%;color:#34495E;"></td>
							    	<th style="width: 70%;">{{ $estudios->institucion }}</td>
					    		</tr>
					   		 </table>
					   		 
							
						@endforeach   
						<br/> 
						<div class="panel panel-default">
						      <div class="panel-heading"><h3>Experiencia Laboral </h3></div>
						      <div class="panel-body">
						 </div>
						<!-- <h3>Experiencia Laboral</h3> -->
						@foreach ($historialaboral as $historialaboral)
							<table>
						    	<tr>
						    		<th style="width: 100%;">{{ $historialaboral->empresa }}</td>					    	
						    	</tr>
					    	</table>
					    	<table>
						    	<tr>
						    		<td style="width: 30%;">{{ $historialaboral->direccionempresa }}</td>					    	
						    		<td style="width: 30%;">{{ $historialaboral->ciudadempresa_id }}</td>
						    		<td style="width: 40%;">Contacto: {{ $historialaboral->telefonoempresa }}</td>

						    	</tr>
					    	</table>
					    	<table>
						    	<tr>
						    		<td style="width: 30%;">Cargo: {{ $historialaboral->cargo }} </td>					    	
						    		<td style="width: 70%;">{{ $historialaboral->descripcion }}</td>
						    	</tr>
					    	</table>										        
						@endforeach
						<br/>
					
			
		</div>			
	


</body>
</html>
	



