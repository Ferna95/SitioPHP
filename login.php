<?php
	session_start();
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$_SESSION['Usuario'] = $usuario;
	header('Location: index.php');
?>