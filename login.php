<?php
	session_start();
	include("conexion.inc");
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	$result = mysqli_query($link,"SELECT * FROM usuarios WHERE usuario='$clave' and clave='$clave'") or die;
	if(mysqli_num_rows($result) != 0){
		$usuarioActual = mysqli_fetch_array($result);
		$_SESSION['Usuario'] = $usuarioActual['usuario'];
		$_SESSION['TipoUsuario'] = $usuarioActual['tipo'];
		header('Location: index.php');		
	}
	else{
		header('Location: index.php');
		echo "<h1>Error de credenciales</h1>";
	}
	mysqli_close($link);
	
?>