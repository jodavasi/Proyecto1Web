<?php
    include_once 'conexionDB.php';
    $user = $_POST['nombre_usuario'];
    $username = $_POST['nombre'];
    $userlastname = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $mail = $_POST['mail'];
    $rol = "c";

    $pass1 = password_hash($pass1,PASSWORD_DEFAULT);

    echo '<pre>';
    var_dump($user);
    var_dump($username);
    var_dump($userlastname);
    var_dump($cedula);
    var_dump($telefono);
    var_dump($pass1);
    var_dump($pass2);
    var_dump($mail);
    var_dump($rol);


    echo '</pre>';

    if(password_verify($pass2,$pass1)){
        echo "Contrasena valida!<br>";
        try{
        $sql_agregar = 'INSERT INTO usuario (apellido,cedula,contrasena,nombre,rol,telefono,username,mail) VALUES (?,?,?,?,?,?,?,?)';
        $sentencia_agregar->execute(array($userlastname,$cedula,$pass1,$username,$rol,$telefono,$user,$mail));
        var_dump($sql_agregar);
        
        var_dump($sentencia_agregar);
        
        }catch(Error $error){
            echo $error;
        }


        $sentencia_agregar = null;
        $pdo = null;
        
        
    }else{

        echo "Contrasenas no coinciden";
    }

    

    





?>