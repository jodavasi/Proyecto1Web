<?php
session_start();
if(isset($_SESSION['admin'])){

    echo 'Bienvenido'.$_SESSION['admin']; 
    echo '<a href="cerrar.php">Cerrar sesion</a>';
}
else{
    header('Location:index.php');
}