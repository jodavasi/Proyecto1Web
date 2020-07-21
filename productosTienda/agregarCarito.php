<?php

    require_once '../conexionDB.php';
    
    session_start();
    
    $carritoUser = $_POST['username'];
    $carritoSKU = $_POST['producSKU'];
    $carritoPrecio = $_POST['producPrecio'];
    $carritoNombre = $_POST['producNombre'];

    

    

    // echo $carritoUser;
    // echo $carritoSKU;
    // echo $carritoPrecio;
   
    

    $sql_agregar = 'INSERT INTO carrito(usuario,producto_SKU, precio,nombre) VALUES (?,?,?,?)';
    $sentencia_agregar  = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($carritoUser,$carritoSKU,$carritoPrecio,$carritoNombre));
    header("Location: ../principalCliente.php");
?>