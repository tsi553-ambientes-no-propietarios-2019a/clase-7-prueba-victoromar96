<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'pruebab1a');
	if($conn->connect_error){
		echo 'Exitió un error en la conexion'.$conn->connect_error;
		header('Location: ../index.php?error_message=Ocurrió un error'.$conn->connect_error);
		exit;
	}else{
		//echo "Conexion correcta";
	}
	

?>