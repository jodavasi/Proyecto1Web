<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/categoria.css">
    
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                
                <form class="box" action="guardarCategoria.php" method="POST">
                <h1 class="center" type="center">Registro de Categoria</h1>
                <input type="text" name="nueva_categoria_nombre" placeholder="Nueva categoria" required>            
                <input type="text" maxLenght="3" name="nueva_categoria_codigo" placeholder="Codigo de 3 caracteres" required>
            
                <button type="submit">Guardar</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
    <h3></h3>
        
    
</body>
</html>



    
    