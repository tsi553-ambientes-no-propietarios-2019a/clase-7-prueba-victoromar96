<?php

	session_start();

	include('php/conection.php');

	if ($_POST) {
		if (isset($_POST['nombre'])&&isset($_POST['direccion'])&&isset($_POST['usuario'])&&isset($_POST['clave'])&&!empty($_POST['nombre'])&&!empty($_POST['direccion'])&&!empty($_POST['usuario'])&&!empty($_POST['clave'])) {

			$nombre = $_POST['nombre'];
			$direccion = $_POST['direccion'];
			$usuario = $_POST['usuario'];
			$clave = $_POST['clave'];

			$sqlinsert = "INSERT INTO tabla1(nombre, direccion, usuario, clave) VALUES ('$nombre', '$direccion', '$usuario', '$clave')";

			$res = $conn->query($sqlinsert);

			if ($conn->error) {
				header('Location: registro_tienda.php?message_error=Error en la insercion'.$conn->error);
			}else{
			
			}
		}else{
			header('Location: registro_tienda.php?message_error=Llene todos los campos');
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
</head>
<body>
	<h2>Registro De Tienda</h2>
	
	<form action="index.php" method="POST">
		
		<input type="text" name="nombre" placeholder="Nombre De La Tienda"><br><br>
		<input type="text" name="direccion" placeholder="Dirección"><br><br>
		<input type="text" name="usuario" placeholder="Usuario"><br><br>
		<input type="text" name="clave" placeholder="Clave"><br><br>
		<button>Registrar</button>
	</form>
	<br>
	<br>

</body>
</html>