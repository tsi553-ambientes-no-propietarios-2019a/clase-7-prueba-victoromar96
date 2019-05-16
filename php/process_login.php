<?php
include('conection.php');
if($_POST){
    if(isset($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tienda WHERE usuario='$username' AND clave = md5('$password')";
        if($conn->error){
            echo 'Ocurrió un error en el registro'.$conn->error;
        }

        $res = $conn->query($sql);
        if($res->num_rows > 0){     
            while($row = $res->fetch_assoc()){
                $_SESSION['user'] = ['username' => $row['usuario'], 'id' => $row['id'], 'nomtienda' => $row['nombretienda'] ];
                
                header('Location: ../inicio.php');
                exit;
            }
        }else{
            header('Location: ../index.php?message=Usuario o clave incorrectos!');
            exit;
        }
        
    }else{
        header('Location: ../index.php?message=Ingrese todos los datos!');
        exit;
        //echo 'Ingrese todos los datos';
    }
}else{
    header('Location: ../index.php');
    exit;
}
?>