<?php
    include_once '../conexionDB.php';


    $sql_leer = 'SELECT * FROM categoria';

    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();

    $resultado = $gsent->fetchAll();

    if($_GET){
         $id = $_GET['id'];
         $sql_unico = 'SELECT * FROM categoria WHERE nombre=?';
         $gsent_unico = $pdo->prepare($sql_unico);
         $gsent_unico->execute(array($id));
         $resultado_unico = $gsent_unico->fetch();


        

        


    }
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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">

                <?php
                    foreach($resultado as $dato):
                ?>
                <div class="alert alert-primary" role="alert">
                    <h3>Categoria: <?php echo $dato['nombre'];
                    $datoNombre = $dato['nombre']?></h3>
                    <!-- <h3>Codigo: <?php //echo $dato['cod_categoria']?></h3> -->
                    <a href="index.php?id=<?php echo $dato['nombre']?>">Editar</a>
                </div>
                <?php
                    endforeach
                ?>
            </div>
            <div class="col-md-6">
                <?php
                    if($_GET):
                ?>
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card">
                                <form method="GET" action="editarCategoria.php" class="box">
                                    <h1>EDITAR</h1>
                                    <input type="text" class="form-control" name="edit_categoria" value="<?php echo $resultado_unico['nombre']?>">
                                    <input type="hidden" class="form-control" name="edit_codigo" value="<?php echo $resultado_unico['cod_categoria']?>">
                                    <input type="hidden" class="form-control" name="categoria_actual" value="<?php echo $resultado_unico['nombre']?>">
                                    <button type="submit">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                <?php
                    endif
                ?>
            </div>
                
            </div>
        </div>

    </div>


</body>
</html>
