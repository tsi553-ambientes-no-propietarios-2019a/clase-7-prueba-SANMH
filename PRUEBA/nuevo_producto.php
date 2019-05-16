<?php 
include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro Productos</title>
    <meta charset="UTF-8">
     <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

     <link href="css/estilo.css" type="text/css" media="all" / >

     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body style="background-color:silver;">
   
    <h2 class="style="color:"black"> Tienda 
     <span class="style="color:"black"><?php echo $_SESSION['user']['nom_tienda'];?> </span> </h2>
    <br>
    <h2 class="style="color:"blue"> <center>Registro de nuevo producto</center> </h2>
    <br>

<?php if(isset($error_message)) { ?>
	<div class="text-danger text-center"><strong><?php echo $error_message; ?></strong></div>   
    <br>
<?php } ?>

    <form action="php/producto_registrado_OK.php" method="post">
    <div class="container col-4">
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Codigo</label>            
            </div>
            <div class="col">
                <input type="text" name="codigo" class="form-control">            
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Nombre</label>    
            </div>
            <div class="col">
		        <input type="text" name="nombre" class="form-control">        
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Tipo</label>
            </div>
            <div class="col">
                <select name="tipo" class="form-control form-control-sm">
                    <option value="Alimento">Alimento</option>
                    <option value="Vestimenta">Vestimenta</option>
                    <option value="Salud">Salud</option>
                </select>       
            </div>            
        </div>
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Cantidad</label>
            </div>
            <div class="col">
                <input type="text" name="cantidad" class="form-control">                      
            </div>      
        </div>
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Precio</label>
            </div>
            <div class="col">
		        <input type="text" name="precio" class="form-control">                    
            </div>
        </div>
        <div class="form-group text-center">
    		<button class="btn btn-primary">Registrar!</button>
        </div>
    </div>
       
    </form>
    

    <footer class="container py-5"> 
       
    </footer>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>