<?php

    require_once '../conexionDB.php';
    
    session_start();
    $nueva_categoria_nombre = $_POST['nueva_categoria_nombre'];
    $nueva_categoria_codigo = $_POST['nueva_categoria_codigo'];

    $sql_agregar = 'INSERT INTO categoria(nombre,cod_categoria) VALUES (?,?)';
    $sentencia_agregar  = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nueva_categoria_nombre,$nueva_categoria_codigo));
    header("Location: ../principalAdmin.php");
?>