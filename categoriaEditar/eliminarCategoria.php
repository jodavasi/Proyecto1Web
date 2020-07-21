<?php

    session_start();
    $anterior = $_GET['id'];
    
     echo $anterior;    




    include_once '../conexionDB.php';
 
    $sql_eliminar = 'DELETE FROM categoria WHERE nombre=?';
    $sentencia_eliminar  = $pdo->prepare($sql_eliminar);
    $sentencia_eliminar->execute(array($anterior));


    header("Location: ../principalAdmin.php");
?>