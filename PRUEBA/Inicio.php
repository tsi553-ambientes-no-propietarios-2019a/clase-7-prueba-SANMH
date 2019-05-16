<?php
include('common/utils.php');
include('php/process_mostrar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

     <link href="css/estilo.css" type="text/css" media="all" / >

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <title>Inicio</title>
</head>
<body style="background-color:silver;">

    <h1 class=" text-center my-3">Tienda EC</h1>

    <br>

    <div class="table-responsive">
 
    <div class="container col-lg text-center bg-light">
        <div class="form-group row">
            <div class="col">

            

                <h2 class="text-right my-3">Bienvenido 
                <span style="color: blue"><?php echo $_SESSION['user']['user_tienda'];?></span>    
                </h2>

            </div>

            <div class="col">
                <h2 class="text-center my-3">Nombre de la tienda 
                <span style="color: blue"><?php echo $_SESSION['user']['nom_tienda'];?></span> 
                </h2>
            </div>


            <div class="col">
                <a  href="php/logout.php" style="color: red" >Cerrar sesión</a>
            </div>
        </div>
    </div>
    </div>
    <br>    
    <h3 style="color: white" class="h3 text-center my-3">Productos en la tienda</h3>
    
    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>            
                    <th scope="col">Tipo</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php mostrar_tabla();?>
            </tbody>
        </table>
    </div>

    <br>
    <br>
    <div class="text-center">
        <a href="nuevo_producto.php" > Registrar nuevo producto </a>       
    </div>
   

    <footer class="container py-5"> 
     
    </footer>

   <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE
</body>
</html>