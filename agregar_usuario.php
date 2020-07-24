<?php
    include_once 'conexionDB.php';
    include_once 'classes/User.php';

    
    $cedula = $_POST['cedula'];
    $username = $_POST['nombre'];
    $userlastname = $_POST['apellido'];
    $user = $_POST['nombre_usuario'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $rol = "c";
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    
    

    

    $pass1 = password_hash($pass1,PASSWORD_DEFAULT);

   
    // echo '<pre>';
    // var_dump($user);
    // var_dump($username);
    // var_dump($userlastname);
    // var_dump($cedula);
    // var_dump($telefono);
    // var_dump($pass1);
    // var_dump($pass2);
    // var_dump($mail);
    // var_dump($rol);


    // echo '</pre>';
    $usuario = new Usuario($cedula,$username,$userlastname,$user,$pass1,$rol,$mail,$telefono);

    if(password_verify($pass2,$pass1)){
        echo "Contrasena valida!<br>";
        try{
        $sql_agregar = 'INSERT INTO usuario (apellido,cedula,contrasena,nombre,rol,telefono,username,mail) VALUES (?,?,?,?,?,?,?,?)';
        $sentencia_agregar->execute(array($usuario->get_apellido(),$usuario->get_cedula(),$usuario->get_contrasena(),$usuario->get_nombre(),$usuario->get_rol(),$$usuario->get_telefono(),$$usuario->get_username(),$$usuario->get_mail()));
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