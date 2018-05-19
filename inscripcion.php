<?php
	include("conexion.inc");
	$dia = $_POST['dia'];
	$hora = $_POST['hora'];
	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$result = mysqli_query($link, "SELECT * FROM clases WHERE dia='$dia' and hora='$hora' and nombre='$nombre'");
	
	$fila = mysqli_fetch_array($result);
	$cupoMaximo = $fila['cupo'];
	$idClase = $fila['id_clase'];
	$result = mysqli_query($link, "SELECT * FROM clases_usuarios WHERE id_clase='$idClase'");
	
	if(mysqli_num_rows($result) >= $cupoMaximo){
		header('Location: calendario.php?m=El cupo esta agotado');
	}
	else if(validarUsuarioInscripto($usuario,$idClase)){
		header('Location: calendario.php?m=El usuario ya se encuentra registrado a esa clase');
	}
	else{
		$result = mysqli_query($link,"INSERT INTO clases_usuarios (id_clase,usuario) VALUES ('$idClase','$usuario')");
		header('Location: calendario.php?m=Se ha registrado la inscripción');
	}


	function validarUsuarioInscripto($usuario,$id_clase){
		include("conexion.inc");
		$result = mysqli_query($link, "SELECT * FROM clases_usuarios WHERE usuario='$usuario' and id_clase='$id_clase'");
		if(mysqli_num_rows($result) != 0){
			return true;
		}
		else{
			return false;
		}
	}
?>