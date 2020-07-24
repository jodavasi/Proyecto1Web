<?php

    require_once '../conexionDB.php';
    require_once '../classes/Producto.php';
    
    session_start();
    $productoSKU = $_POST['productoSKU'];
    $productoNombre = $_POST['productoNombre'];
    $productoDescripcion = $_POST['productoDescripcion'];
    $productoImage = $_POST['productoImage'];
    $productoCategoria = $_POST['productoCategoria'];
    $productoStock = $_POST['productoStock'];
    $productoPrecio = $_POST['productoPrecio'];

    $producto = new Producto($productoSKU,$productoNombre,$productoDescripcion,$productoImage,$productoCategoria,$productoStock,$productoPrecio);

    
    

    // echo $productoSKU;
    // echo $productoNombre;
    // echo $productoDescripcion;
    // echo $productoImage;
    // echo $productoCategoria;
    // echo $productoStock;
    // echo $productoPrecio;
    

    $sql_agregar = 'INSERT INTO producto(SKU, nombre, descripcion, imagen, categoria, stock, precio) VALUES (?,?,?,?,?,?,?)';
    $sentencia_agregar  = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($producto->get_SKU(),$producto->get_nombre(),$producto->get_descripcion(),$producto->get_imagen(),$producto->get_categoria(),$producto->get_stock(),$producto->get_precio()));
    header("Location: ../principalAdmin.php");
?>