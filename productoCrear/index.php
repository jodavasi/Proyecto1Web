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
    <link rel="stylesheet" href="../css/categoria.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                
                <form class="box" action="guardarProducto.php" method="POST">
                    <h1 class="center" type="center">Registro de Nuevo Producto</h1>
                    <input type="text" name="productoSKU" placeholder="Codigo SKU" required>            
                    <input type="text" name="productoNombre" placeholder="Nombre del producto" required>            
                    <input type="text" name="productoDescripcion" placeholder="Descripcion" required>            
                    <input type="file" name="productoImage" placeholder="" required>  
                    <br> 
                    <br>             
                    <select name="productoCategoria">
                        <?php
                            foreach($resultado as $dato):
                        ?>
                        <option value=""><?php echo $dato['nombre']?></option>
                        <?php
                            endforeach
                        ?>
                    </select>                     
                    <input type="text" name="productoStock" placeholder="Stock" required>            
                    <input type="text" name="productoPrecio" placeholder="Precio(Dolares Americanos)" required>            
                    
                    <button type="submit">Guardar</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

        
    
</body>
</html>



    
    