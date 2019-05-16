<?php 
session_start();

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

    $conn = new mysqli('localhost', 'root', '', 'pruebab1');

    if($conn->connect_error) {
	    echo 'Existió un error en la conexión ' . $conn->connect_error;
	    exit;
    }


if ($_SERVER['SCRIPT_NAME'] != '/PRUEBA/index.php' && $_SERVER['SCRIPT_NAME'] != '/PRUEBA/php/process_login.php' && !isset($_SESSION['user'])) {
	redirect($_SERVER["HTTP_HOST"] . '/PRUEBA/index.php');
} elseif( $_SERVER['SCRIPT_NAME'] == '/PRUEBA/index.php' && isset($_SESSION['user']) ) {

	redirect($_SERVER["HTTP_HOST"] . '/PRUEBA/Inicio.php');
}

