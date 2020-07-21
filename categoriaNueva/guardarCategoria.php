<?php

    require_once '../conexionDB.php';
    
    session_start();
    
    $categoriaNombre = $_POST['categoriaNombre'];
    

    echo $categoriaNombre;
   
    

    $sql_agregar = 'INSERT INTO categoria(nombre,cod_categoria) VALUES (?,?)';
    $sentencia_agregar  = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($categoriaNombre,$categoriaNombre));
    header("Location: ../principalAdmin.php");
?>