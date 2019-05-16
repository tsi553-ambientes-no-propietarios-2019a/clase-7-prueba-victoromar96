<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'pruebab1a');
$id=$_SESSION['user']['id'];
if($_POST){
	if(isset($_POST['nombre'])&&isset($_POST['tipo'])&&isset($_POST['stock'])&&isset($_POST['precio'])&&!empty($_POST['nombre'])&&!empty($_POST['tipo'])&&!empty($_POST['stock'])&&!empty($_POST['precio'])){
		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];
		$stock = $_POST['stock'];
		$precio = $_POST['precio'];
		$sqlinsert = "INSERT INTO producto(nombre, tipo, stock, precio, iduser) VALUES ('$nombre', '$tipo', '$stock', '$precio', '$id')";
		$conn->query($sqlinsert);
		if ($conn->error) {
			header('Location: ../nuevo_producto.php?message=Error en la insercion!'.$conn->error);
			exit;
		}else{
			header('Location: ../nuevo_producto.php?message=Datos enviados correctamente!');
			exit;
		}
	}else{
		header('Location: ../nuevo_producto.php?message=Llene todos los campos!');
			exit;
	}
}
?>