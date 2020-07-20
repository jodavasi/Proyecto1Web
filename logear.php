<?php
    require_once 'conexionDB.php';
    
    session_start();
    $usuario_login = $_POST['user_login'];
    $password_login = $_POST['password_login'];

    echo '<pre>';

    var_dump($usuario_login);
    var_dump($password_login);
    
    echo '<pre>';

    $sql = 'SELECT * FROM usuario WHERE username = ?';

    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($usuario_login));
    $resultado = $sentencia->fetch();
    
    var_dump($resultado);

    if(!$resultado){
        echo "el usuario no existe";
        header("Location: login.php");
        
    }
    
    if(password_verify($password_login, $resultado['contrasena'] ) && $resultado['rol']=="c"){
        $_SESSION['user'] = $usuario_login;
        header("Location: principalCliente.php");


    }elseif(password_verify($password_login, $resultado['contrasena'] ) && $resultado['rol']=="a"){
        $_SESSION['user'] = $usuario_login;
        header("Location: principalAdmin.php");

    }elseif(!password_verify($password_login, $resultado['contrasena'])){
        header("Location: login.php");

    }


?>