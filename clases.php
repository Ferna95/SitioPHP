<?php
	
	function getClase($hora,$dia){
		include("conexion.inc");
		$result = mysqli_query($link,"SELECT * FROM clases WHERE hora='$hora' and dia='$dia'");
		if(mysqli_num_rows($result)!=0){
			$fila = mysqli_fetch_array($result);
			return $fila['nombre'];
		}
		else{
			return '0';
		}
	}
?>