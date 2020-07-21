<?php
    include_once '../conexionDB.php';

    $sql_leer = 'SELECT * FROM categoria';

    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();

    $resultado = $gsent->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/categoriaEditar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
            <form class="box" action="../principalAdmin.php" method="POST">
                <div>
                <?php
                
                    foreach($resultado as $dato):
                        
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Categoria: <?php echo $dato['nombre']?></h3>
                            <h4 class="card-text">Codigo: <?php echo $dato['cod_categoria']?></h4>
                            <a href="#" class="btn btn-primary">Editar</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <?php
                        endforeach
                    ?>
                
                
                </div>
                <button type="submit">Volver</button>    
            </form>

                
                
            </div>
        </div>
    </div>
</div>
    <h3></h3>
        
    
</body>
</html>



                    