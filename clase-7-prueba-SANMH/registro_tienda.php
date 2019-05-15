<?php 
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
    <h2>Tiendas EC</h2>
	<h1>Registro de Tienda</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_registration.php" method="post">
		Nombre de la tienda: <input type="text" name="Nombre_de_Tienda">
</br>
</br>



        Usuario: <input type="text"
        name="Usuario">
</br>
</br>

        Clave: <input type="password"
        name="Clave">

</br>
</br>
        Repetir Clave: <input type="password" name="Repetir clave">
		<button>Registrar</button>
	</form>
</body>
</html>