<?php

	$conn = new mysqli('localhost', 'root', '', 'pruebab1');

	if ($conn->connect_error) {
		header('Location: ..index.php?message_error=Error en la conexion');
		exit;
	}

?>
