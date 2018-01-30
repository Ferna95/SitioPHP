<?php
	include("conexion.inc");
	$dia = $_POST['dia'];
	$hora = $_POST['hora'];
	$usuario = $_POST['usuario'];
	
	$result = mysqli_query($link, "SELECT * FROM clases WHERE dia='$dia' and hora='$hora'");
	
	$fila = mysqli_fetch_array($result);
	$cupoMaximo = $fila['cupo'];
	$idClase = $fila['id_clase'];

	$result = mysqli_query($link, "SELECT * FROM clases_usuarios WHERE id_clase='$idClase'");
	
	if(mysqli_num_rows($result) < $cupoMaximo){
		$result = mysqli_query($link,"INSERT INTO clases_usuarios (id_clase,usuario) VALUES ('$idClase','$usuario')");
	}
	else{
		echo "EL CUPO ESTA AGOTADO";
	}
?>