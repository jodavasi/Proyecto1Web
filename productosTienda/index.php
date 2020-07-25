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




    if($_POST){
         $id = $_POST['productoCategoria_edit'];
         $sql_unico = 'SELECT * FROM producto WHERE categoria=?';
         $gsent_unico = $pdo->prepare($sql_unico);
         $gsent_unico->execute(array($id));
         $resultado_unico = $gsent_unico->fetchAll();
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/carrito.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>


<div class="box">
<div class="buscador col-sm-12">
<form action="index.php" method="POST">
<select name="productoCategoria_edit" id="productoCategoria">
        <?php
        foreach($resultado_categoria as $dato):
        ?>
        <option value="<?php echo $dato['nombre']?>"><?php echo $dato['nombre']?></option>
        <?php
        endforeach
    ?>
</select>
<button action="submit" type="submit">Desplegar</button>
</form>
</div>



    </select>
    <?php
    if($_POST):
    ?>

</div>
   <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">

                <?php
                    foreach($resultado_unico as $dato):
                ?>
                <form action="agregarCarito.php" method="POST">
                <div class="alert alert-dark" name="productos" role="alert">
                    <p><?php echo $dato['categoria']?></p>
                    <h3><?php echo $dato['nombre']?></h3>
                    <h5>$<?php echo $dato['precio']?></h5>
                    <p><?php echo $dato['descripcion']?></p>
                    <input type="hidden" name="producPrecio" value="<?php echo $dato['precio']?>" required>
                    <input type="hidden" name="producSKU" value="<?php echo $dato['SKU']?>" required>
                    <input type="hidden" name="producNombre" value="<?php echo $dato['nombre']?>" required>
                    <input type="hidden" name="username" value="<?php session_start();
                    
      if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
        
      }else{
        header('Location:login.php');
  
      }?>" required>
                    

                    <img src="../img/<?php echo $dato['imagen']?>" alt="">
                    <br>
                    <div class="box">
                    <button action="submit" type="submit">agregar al Carrito</button>
                    </div>    
                </form>
                </div>  
                <?php
                    endforeach
                ?>
                
            </div>
            </div>
                
            </div>
        </div>

    </div>
    <?php endif?>


</body>
</html>
