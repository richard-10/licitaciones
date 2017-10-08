<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	
		<div><h2> CONSULTA DE PROVEEDOR: </h2></div>

		<strong>Mensaje de: </strong>
			<a href="<?php echo "mailto:$correo"; ?>"> {!!$correo!!} </a> 

		<br><br>

		<strong>Asunto: </strong>
			{!!$asunto!!}

		<br><br>

		<strong>Mensaje: </strong>
			{!!$mensaje!!}
</body>
</html>