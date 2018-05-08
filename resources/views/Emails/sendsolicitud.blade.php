<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
<H1>CRM UDEC FACATATIVA</H1>
<p>
	Nombre: {{ $msg->usuario->name }}<br>

	Email: {{ $msg->correo }}<br>
</p>
<h2>Mensaje: {{ $msg->solicitudrespuesta }}</h2>
</body>
</html>