<?php

    require_once '../conexionDB.php';
    
    session_start();
    
    $carritoUser = $_POST['username'];
    $carritoSKU = $_POST['producSKU'];
    $carritoPrecio = $_POST['producPrecio'];
    $carritoNombre = $_POST['producNombre'];
    $carritoCantidad = "1"; 

    

    

    // echo $carritoUser;
    // echo $carritoSKU;
    // echo $carritoPrecio;
    // echo $carritoNombre;
   
    
    $sql_agregar = 'INSERT INTO carrito(usuario,producto_SKU, precio,nombre,cantidad) VALUES (?,?,?,?,?)';
    $sentencia_agregar  = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($carritoUser,$carritoSKU,$carritoPrecio,$carritoNombre,$carritoCantidad));
    header("Location: ../principalCliente.php");
   
?>