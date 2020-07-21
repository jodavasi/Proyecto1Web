<?php

    
    
    session_start();
    $anterior = $_GET['categoria_actual'];
    $categoria = $_GET['edit_categoria'];
    $codigo = $_GET['edit_codigo'];

    echo $anterior;
    echo $categoria;
    echo $codigo;



    include_once '../conexionDB.php';
 
    $sql_editar = 'UPDATE categoria SET nombre=?,cod_categoria=? WHERE nombre=?';
    $sentencia_editar  = $pdo->prepare($sql_editar);
    $sentencia_editar->execute(array($categoria,$codigo,$anterior));


    header("Location: ../principalAdmin.php");
?>