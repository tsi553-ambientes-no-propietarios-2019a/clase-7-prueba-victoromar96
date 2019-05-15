<?php 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<h2>Productos de la Tienda</h2>
	<table border="2">
		<tr>
			<td>Código</td>
			<td>Nombre</td>
			<td>Tipo</td>
			<td>Stock</td>
			<td>Precio</td>
		</tr>

		<?php

			include('php/conection.php');
			$sqlquery = "SELECT * FROM productos";
			$res = $conn->query($sqlquery);
			while ($productos = $res->fetch_assoc()) {
		?>

		<tr>
			<td><?php echo $productos['codigo'] ?></td>
			<td><?php echo $productos['nombre'] ?></td>
			<td><?php echo $productos['tipo'] ?></td>
			<td><?php echo $productos['cantidad'] ?></td>
			<td><?php echo $productos['precio'] ?></td>
		</tr>
		<?php 
			}
		?>
	</table>
	<br><br><a href="nuevo_producto.php"> Registrar nuevo Producto</a>
</body>
</html>