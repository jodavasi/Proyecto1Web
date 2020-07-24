<?php
    include_once '../conexionDB.php';


    $sql_leer = 'SELECT * FROM producto';

    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();

    $resultado = $gsent->fetchAll();


    $sql_leer = 'SELECT * FROM categoria';

    $gsent_categoria = $pdo->prepare($sql_leer);
    $gsent_categoria->execute();

    $resultado_categoria = $gsent_categoria->fetchAll();




    if($_GET){
         $id = $_GET['id'];
         $sql_unico = 'SELECT * FROM producto WHERE nombre=?';
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
                    <div class="contenedor_general">
                        <div class="alert alert-dark" role="alert">
                            <p><?php echo $dato['categoria']?></p>
                            <h3><?php echo $dato['nombre']?></h3>
                            <h5>$<?php echo $dato['precio']?></h5>
                            <p><?php echo $dato['descripcion']?></p>
                            <p><?php echo $dato['stock']?></p>

                            <img src="../img/<?php echo $dato['imagen']?>" alt="">
                            <br>
                            <a href="index.php?id=<?php echo $dato['nombre']?>">Editar</a>
                            <a href="eliminarProducto.php?id=<?php echo $dato['SKU']?>">Eliminar</a>
                        </div> 
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
                                <form method="GET" action="editarProducto.php" class="box">
                                    <h1>Editar</h1>
                                    <input type="text" name="productoSKU_edit" placeholder="Codigo SKU" value="<?php echo $resultado_unico['SKU']?>">            
                                    <input type="text" name="productoNombre_edit" placeholder="Nombre del producto" value="<?php echo $resultado_unico['nombre']?>">            
                                    <input type="text" name="productoDescripcion_edit" placeholder="Descripcion" value="<?php echo $resultado_unico['descripcion']?>">            
                                    <input type="file" name="productoImage_edit" placeholder="" require>  
                                    <br> 
                                    <br>  
                                    <div id="selector">           
                                        <select name="productoCategoria_edit" id="productoCategoria">
                                            <?php
                                                foreach($resultado_categoria as $dato):
                                            ?>
                                            <option value="<?php echo $dato['nombre']?>"><?php echo $dato['nombre']?></option>
                                            <?php
                                                endforeach
                                            ?>
                                        </select>  
                                    </div>                   
                                    <input type="text" name="productoStock_edit" placeholder="Stock" value="<?php echo $resultado_unico['stock']?>">            
                                    <input type="text" name="productoPrecio_edit" placeholder="Precio(Dolares Americanos)" value="<?php echo $resultado_unico['precio']?>">  
                                    <input type="hidden" class="form-control" name="SKU_actual" value="<?php echo $resultado_unico['SKU']?>">          
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
