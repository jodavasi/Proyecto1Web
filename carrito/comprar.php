<?php

    require_once '../conexionDB.php';
    
    session_start();
    
    $compraUser = $_POST['username'];
    $compraSKU = $_POST['producSKU'];
    $compraNombre = $_POST['producNombre'];

    $compraPrecio = $_POST['producPrecio'];


    $date = new DateTime();
    $fechaActual = $date->format('d-m-Y');
    // echo $fechaActual;


    // echo $compraNombre;
    // echo $compraPrecio;
    // echo $compraSKU;
    // echo $compraUser;


    

    // echo $carritoUser;
    // echo $carritoSKU;
    

   
    //crea factura

    // $sql_agregar = 'INSERT INTO venta(fecha,precio,producto_nombre,producto_SKU,usuario) VALUES (?,?,?,?,?)';
    // $sentencia_agregar  = $pdo->prepare($sql_agregar);
    // $sentencia_agregar->execute(array($fechaActual,$compraPrecio,$compraNombre,$compraSKU,$compraUser));
    
    
    //elimina el carrito 
    // $sql_eliminar = 'DELETE FROM carrito WHERE producto_SKU=?';
    // $sentencia_eliminar  = $pdo->prepare($sql_eliminar);
    // $sentencia_eliminar->execute(array($compraSKU));

    //dashboard voy por aqui

    $historico='h';
    $sql_leer = 'SELECT * FROM dashboard WHERE historico=?';

    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute(array($historico));

    $resultado = $gsent->fetch();

    $cantVentas = $resultado['monto_ventas'];



    
    
    header("Location: ../principalCliente.php");


?>