<?php 
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>

	<title>Registro Tienda</title>
    <meta charset="UTF-8">
     <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

     <link href="css/estilo.css" type="text/css" media="all" / >
	
</head>
<body style="background-color:silver;">


<article>
<section class="container">

<h1 class=" text-center my-3">Tienda EC</h1>

    <br>
	<h3 > <center>Registro de Tienda</center> </h3>
    <br>

<?php if(isset($error_message)) { ?>
	<div class="text-center text-danger"><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
    <br>

    <form action="php/process_registration.php" method="post">
    <div class="container col-5" >
        <div class="form-group row">
            <div class="col text-md-right">
                <label>Nombre de tienda</label>
            </div>
            <div class="col">
                <input type="text" name="nom_tienda" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="col text-md-right">
                <label>Usuario</label>
            </div>
            <div class="col">
		        <input type="text" name="username" class="form-control">                    
            </div>
        </div>
        <div class="form-group row">
            <div class="col text-md-right">
                <label>Clave</label>
            </div>
            <div class="col">
                <input type="password" name="password" class="form-control">            
            </div>
        </div>
        <div class="form-group row">
            <div class="col text-md-right">
                <label>Repetir Clave</label>                
            </div>
            <div class="col"> 
		        <input type="password" name="rep_pass" class="form-control">                    
            </div>
        </div>

        <div class="form-group col text-md-center">
    		<button class="btn btn-primary" style="color: black">Registrar!</button>
        </div>
    </div>

	</form>




<div>
    <footer> 
        <center style="color:blue">Ambientes no propieatarios</center>
    </footer>
</div>


   </section>
        </article>



    
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE

</body>
</html>