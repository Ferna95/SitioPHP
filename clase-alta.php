<?php
	include("conexion.inc");
	$nombre = $_POST['nombre'];
	$dia = $_POST['dia'];
	$hora = $_POST['hora'];
	$profesor = $_POST['profesor'];
	$cupo = $_POST['cupo'];

	$result = mysqli_query($link,"INSERT INTO clases (nombre,dia,hora,nombre_profesor,cupo) VALUES 
		('$nombre','$dia','$hora','$profesor','$cupo')") or die("No se ha podido ingresar clase");

	header('Location: admin-clases.php');
?>