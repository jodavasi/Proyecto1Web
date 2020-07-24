<?php

    require_once '../conexionDB.php';
    require_once '../classes/Categoria.php';
    
    session_start();
    
    $categoriaNombre = $_POST['categoriaNombre'];

    $categoria = new Categoria($categoriaNombre);
    

    // echo $categoriaNombre;
   
    

    $sql_agregar = 'INSERT INTO categoria(nombre,cod_categoria) VALUES (?,?)';
    $sentencia_agregar  = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($categoria->get_nombre(),$categoria->get_nombre()));
    header("Location: ../principalAdmin.php");
?>