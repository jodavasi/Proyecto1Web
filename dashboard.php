<?php
 include_once 'conexionDB.php';


$sql_contar = 'SELECT count(cedula) FROM usuario WHERE rol="c"';

$gsent_contar = $pdo->prepare($sql_contar);
$gsent_contar->execute();

$resultado_contar = $gsent_contar->fetch();



$sql_ventas = 'SELECT * FROM `dashboard` WHERE 1';

$gsent_ventas = $pdo->prepare($sql_ventas);
$gsent_ventas->execute();

$resultado_ventas = $gsent_ventas->fetch();

// var_dump($resultado_ventas);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
            
                <div class="box">
                    <h1>RECORDS</h1>
                    <div class="card" style="width: 26rem;">
                    <div class="card-body">
                        
                        <h2 class="card-subtitle mb-2 text-muted">Cantidad de clientes: <?php echo $resultado_contar['count(cedula)']?></h2>
                        <h2 class="card-subtitle mb-2 text-muted">Productos vendidos: <?php echo $resultado_ventas['cant_ventas']?></h2>
                        <h2 class="card-subtitle mb-2 text-muted">Monto total de ventas: <?php echo $resultado_ventas['monto_ventas']?></h2>

                        
                    </div>
                    
                </div>
                <form action="principalAdmin.php" method="POST">
                    <button type="submit">ATRAS</button>
                    </form>

                
                
                <div>
                </div>
            </div>
        </div>
    </div>
</div>


    
</body>
</html>

