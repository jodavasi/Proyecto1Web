<?php

    require_once '../conexionDB.php';
    
    session_start();
    
    $compraUser = $_POST['username'];
    $compraSKU = $_POST['producSKU'];
    $compraNombre = $_POST['producNombre'];
    $compraCantidad= $_POST['producCantidad'];  
    $compraPrecio = $_POST['producPrecio'];


    $date = new DateTime();
    $fechaActual = $date->format('d-m-Y');

   




    // echo $fechaActual;
    // echo $compraNombre;
    // echo $compraPrecio;
    // echo $compraSKU;
    // echo $compraUser;
    // echo $compraCantidad;


    

    

   
    //crea factura funciona

    $sql_agregar = 'INSERT INTO `venta`(`usuario`, `producto_SKU`, `fecha`, `precio`, `producto_nombre`, `cantidad`) VALUES (?,?,?,?,?,?)';
    $sentencia_agregar  = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($compraUser,$compraSKU,$fechaActual,$compraPrecio,$compraNombre,$compraCantidad));
    
    
    //elimina de carrito  funciona
    $sql_eliminar = 'DELETE FROM carrito WHERE producto_SKU=?';
    $sentencia_eliminar  = $pdo->prepare($sql_eliminar);
    $sentencia_eliminar->execute(array($compraSKU));

    //dashboard voy por aqui

    $historico='h';
    $sql_leer = 'SELECT * FROM dashboard';

    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute(array($historico));

    $resultado = $gsent->fetchAll();

    $cantVentas = $resultado['cant_ventas'];

    foreach($resultado as $dato):
        $cantVentas = $dato['cant_ventas'];
        $montVentas = $dato['monto_ventas'];

    endforeach;
    
    $intCantVentas = (int)$cantVentas;
    $intMontoVentas = (int)$montVentas;
    $intCompraPrecio = (int)$compraPrecio;

    $intCantVentas++;
    $intMontoVentas =$intMontoVentas + $intCompraPrecio;

    $cantVentas = (string)$intCantVentas;
    $montVentas = (string)$intMontoVentas;
    $historico = "historico";

    // echo $cantVentas;
    // echo $montVentas;

    // echo $historico;


    //insertar a Dashboard listo

    $sql_dash= 'UPDATE dashboard SET cant_ventas=?,monto_ventas=? WHERE historico=?';
    $sentencia_dash  = $pdo->prepare($sql_dash);
    $sentencia_dash->execute(array($cantVentas,$montVentas,$historico));

    








    // echo $intCantVentas;
    // echo $intMontoVentas;




    

    


    // cantidad stock
    $sql_leer = 'SELECT stock FROM producto WHERE SKU=?';

    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute(array($compraSKU));



    $resultadoProducto = $gsent->fetchAll();

    foreach($resultadoProducto as $dato):
        $cantStock = $dato['stock'];        

    endforeach;

    $intCantStock = (int)$cantStock;
    $intCantStock--;

    
    $cantStock = (string)$intCantStock;

    //cambiar stock listo

    $sql_dash= 'UPDATE producto SET stock=? WHERE SKU=?';
    $sentencia_dash  = $pdo->prepare($sql_dash);
    $sentencia_dash->execute(array($cantStock,$compraSKU));



  
    



    
    
    header("Location: ../factura");


?>