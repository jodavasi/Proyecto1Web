<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="agregar_usuario.php" method="POST">

        <input type="text" name="mail" placeholder="Ingresa tu correo">            
        <input type="text" name="nombre_usuario" placeholder="Ingresa el nombre de usuario">
        <input type="text" name="nombre" placeholder="Ingresa tu nombre">
        <input type="text" name="apellido" placeholder="Ingresa tu apellido">
        <input type="text" name="cedula" placeholder="Ingresa un numero de cedula">
        <input type="text" name="telefono" placeholder="ingrese su numero telefonico">
        <input type="text" name="pass1" placeholder="Ingresa una contraseña">
        <input type="text" name="pass2" placeholder="Repite la contraseña">
        
        <button>Guardar</button>



    </form>
</body>
</html>