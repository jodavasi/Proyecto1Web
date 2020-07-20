<?php
    require 'conexionDB.php';
    
    session_start();
    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $query = "SELECT COUNT(*) FROM usuario where cedula = '$usuario' and pass = '$password' ";
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);
    if($array['contar']>0){
        header("location: paginaPrincipalAdmin.php");
        $_SESSION['username'] = $usuario;

    }else{

        echo "Datos erroneos";
    }


?>