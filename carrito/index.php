<?php
    include_once '../conexionDB.php';
    session_start();
      
      if(isset($_SESSION['user'])){
        $usuario= $_SESSION['user'];
        
  
      }else{
        header('Location:login.php');
  
      }
    $sql_leer = 'SELECT * FROM carrito WHERE usuario=?';

    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute(array($usuario));

    $resultado = $gsent->fetchAll();

    var_dump($resultado);

    


    // $sql_leer = 'SELECT * FROM producto WHERE SKU=?';

    // $gsent_categoria = $pdo->prepare($sql_leer);
    // $gsent_categoria->execute();

    // $resultado_categoria = $gsent_categoria->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/categoriaEditar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>



<div class="buscador col-sm-12">

</div>
      <div class="">
      <h1>CARRITO!!!</h1>
      </div>
    
    
   <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">

                <?php
                    foreach($resultado as $dato):
                ?>
                <form action="comprar.php" method="POST">
                <div class="alert alert-dark" name="productos" role="alert">
                    <h3><?php echo $dato['nombre']?></h3>
                    <h5>$<?php echo $dato['precio']?></h5>
                    <p><?php echo $dato['producto_SKU']?></p>
                    <input type="hidden" name="producSKU" value="<?php echo $dato['producto_SKU']?>" required>
                    <input type="hidden" name="username" value="<?php echo $dato['usuario'] ?>">
                    <input type="hidden" name="producNombre" value="<?php echo $dato['nombre']?>" required>
                    <input type="hidden" name="producPrecio" value="<?php echo $dato['precio']?>" required>
                    


                    

                    <img src="../img/<?php echo $dato['imagen']?>" alt="">
                    <br>
                    <button action="submit">comprar!</button>
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

</body>
</html>
