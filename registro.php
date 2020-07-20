<?php
   include_once 'conexionDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
<?php
    if($_POST){
        try{
            
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
            if(password_verify($pass2,$pass1)){
                $sql_agregar = 'INSERT INTO usuario(cedula,apellido,contrasena,nombre,rol,telefono,username,mail) VALUES (?,?,?,?,?,?,?,?)';
                $sentencia_agregar  = $pdo->prepare($sql_agregar);
                $sentencia_agregar->execute(array($cedula,$userlastname,$pass1,$username,$rol,$telefono,$user,$mail));
                header("Location: login.php");
            }else{
                header("Location: registro.php");

                
            }

            
            


        }catch(PDOException $e){
            


            print("Error!: ". $e->getMessage() ."<br/>");
            die();
        }
}
    
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                
                <form class="box" method="POST">
                <h1>Tienda Virtual Registro</h1>
                <input type="text" name="mail" placeholder="Ingresa tu correo" required>            
                <input type="text" name="nombre_usuario" placeholder="Ingresa el nombre de usuario" required>
                <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
                <input type="text" name="apellido" placeholder="Ingresa tu apellido" required>
                <input type="text" name="cedula" placeholder="Ingresa un numero de cedula" required>
                <input type="text" name="telefono" placeholder="ingrese su numero telefonico" required>
                <input type="password" name="pass1" placeholder="Ingresa una contraseña" required>
                <input type="password" name="pass2" placeholder="Repite la contraseña" required>
        
                <button type="submit">Guardar</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
    <h3></h3>
        
    
    




   
</body>
</html>



