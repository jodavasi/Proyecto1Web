<?php

    require_once '../conexionDB.php';
    
    session_start();
    
    $productoSKU = $_POST['productoSKU'];
    $productoNombre = $_POST['productoNombre'];
    $productoDescripcion = $_POST['productoDescripcion'];
    $productoImage = $_POST['productoImage'];
    $productoCategoria = $_POST['productoCategoria'];
    $productoStock = $_POST['productoStock'];
    $productoPrecio = $_POST['productoPrecio'];

    // echo $productoSKU;
    // echo $productoNombre;
    // echo $productoDescripcion;
    // echo $productoImage;
    // echo $productoCategoria;
    // echo $productoStock;
    // echo $productoPrecio;
    

    $sql_agregar = 'INSERT INTO producto(SKU, nombre, descripcion, imagen, categoria, stock, precio) VALUES (?,?,?,?,?,?,?)';
    $sentencia_agregar  = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($productoSKU,$productoNombre,$productoDescripcion,$productoImage,$productoCategoria,$productoStock,$productoPrecio));
    header("Location: ../principalAdmin.php");
?>