
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
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
            
                <div class="box" >
                <form action="logear.php" method="POST">
                    <h1>Tienda Virtual</h1>
                    <p class="text-muted"> Ingrese sus datos de acceso!</p> 
                    <input type="text" name="user_login" placeholder="ingrese su usuario" require>
                    <input type="password" name="password_login" placeholder="Ingresa su contraseña"require>
                    <button type="submit">INGRESAR</button>
                </form>
                <form action="registro.php" method="POST">
                    <button type="submit">REGISTRAR</button>

                </div>
                <div>
                    

                </div>


                

            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
</body>
</html>
<!-- <div class="form-group">
            <form action="logear.php" method="POST">
                <input type="text" class="form-control" name="user_login" placeholder="ingrese su usuario" required>
                <input type="password" class="form-control" name="password_login" placeholder="Ingresa su contraseña" required>
                <button>INGRESAR</button>
            </form>
        </div> -->