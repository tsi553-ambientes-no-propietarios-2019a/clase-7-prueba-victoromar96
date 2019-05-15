<?php
	include('php/conection.php');

	if ($_POST) {
		if (isset($_POST['codigo'])&&isset($_POST['nombre'])&&isset($_POST['tipo'])&&isset($_POST['cantidad'])&&isset($_POST['precio'])&&!empty($_POST['codigo'])&&!empty($_POST['nombre'])&&!empty($_POST['tipo'])&&!empty($_POST['cantidad'])&&!empty($_POST['precio'])) {

			$codigo = $_POST['codigo'];
			$nombre = $_POST['nombre'];
			$tipo = $_POST['tipo'];
			$cantidad = $_POST['cantidad'];
			$precio = $_POST['precio'];

			$sqlinsert = "INSERT INTO productos(codigo, nombre, tipo, cantidad, precio) VALUES ('$codigo', '$nombre', '$tipo', '$cantidad', '$precio')";

			$res = $conn->query($sqlinsert);

			if ($conn->error) {
				header('Location: nuevo_producto.php?message_error=Error en la insercion'.$conn->error);
			}else{
			
			}
		}else{
			header('Location: nuevo_producto.php?message_error=Llenar todos los campos');
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
</head>
<body>
	<h2>Registro De Productos</h2>
	
	<form method="POST">
		<input type="text" name="codigo" placeholder="Código"><br><br>
		<input type="text" name="nombre" placeholder="Nombre"><br><br>
		<input type="text" name="tipo" placeholder="Tipo"><br><br>
		<input type="text" name="cantidad" placeholder="Cantidad"><br><br>
		<input type="text" name="precio" placeholder="Precio"><br><br>
		<button>Registrar</button>
	</form>
	<a href="inicio.php">ListaProductos</a>
</body>
</html>