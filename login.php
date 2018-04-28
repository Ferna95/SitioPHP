<?php
	session_start();
	include("conexion.inc");
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$result = mysqli_query($link,"SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'") or die;
	if(mysqli_num_rows($result) != 0){
		$usuarioActual = mysqli_fetch_array($result);
		$_SESSION['Usuario'] = $usuarioActual['usuario'];
		$_SESSION['TipoUsuario'] = $usuarioActual['tipo'];
		$_SESSION['EstadoUsuario'] = $usuarioActual['estado'];
		header('Location: index.php');		
	}
	else{
		$_SESSION['ErrorActual'] = "<script type='text/javascript'>alert('Error de credenciales')</script>";
		header('Location: index.php');
	}
	mysqli_close($link);
	
?>