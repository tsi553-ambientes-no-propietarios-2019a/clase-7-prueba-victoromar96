<!DOCTYPE html>
<?php 
include('php/conection.php');
?>
<html>
<head>
    <title> Registro de Producto</title>
</head>
<body>
    <h1>Registro de Producto</h1>
    <form action="php/process_producto.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre de producto"><br><br>
        <input type="text" name="tipo" placeholder="Tipo de producto"><br><br>
        <input type="text" name="stock" placeholder="Stock"><br><br>
        <input type="text" name="precio" placeholder="Precio"><br><br>
        <button>Registrar</button>

    </form>
    <br>
    <?php
        if ($_GET) {
            if (isset($_GET['message'])) {
                echo $_GET['message'];
            }
        }
    ?>

    <br><a href="inicio.php">lista de Productos</a>

</body>
</html>