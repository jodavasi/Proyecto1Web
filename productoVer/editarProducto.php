<?php

    
    
    session_start();
    $anterior = $_GET['SKU_actual'];
    $productoSKU = $_GET['productoSKU_edit'];
    $productoNombre = $_GET['productoNombre_edit'];
    $productoDescripcion = $_GET['productoDescripcion_edit'];
    $productoImage = $_GET['productoImage_edit'];
    $productoCategoria = $_GET['productoCategoria_edit'];
    $productoStock = $_GET['productoStock_edit'];
    $productoPrecio = $_GET['productoPrecio_edit'];
    // echo $anterior;
    // echo $productoNombre;
    // echo $productoDescripcion;
    // echo $productoImage;
    // echo $productoCategoria;
    // echo $productoStock;
    // echo $productoPrecio;



    include_once '../conexionDB.php';
 
    $sql_editar = 'UPDATE producto SET SKU=?,nombre=?,descripcion=?,imagen=?,categoria=?,stock=?,precio=? WHERE SKU=?';
    $sentencia_editar  = $pdo->prepare($sql_editar);
    $sentencia_editar->execute(array($productoSKU,$productoNombre,$productoDescripcion,$productoImage,$productoCategoria,$productoStock,$productoPrecio,$anterior));


    header("Location: ../principalAdmin.php");
?>