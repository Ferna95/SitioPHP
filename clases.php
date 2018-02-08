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

	function getClases(){
		include("conexion.inc");
		$result = mysqli_query($link,"SELECT * FROM clases");
		if(mysqli_num_rows($result)!=0){
			for($i=0;$i<mysqli_num_rows($result);$i++){
				$array[$i] = mysqli_fetch_array($result);
			}
			return $array;
		}
		else{
			return '0';
		}
	}

	function contarCupo($idClase){
		include("conexion.inc");
		$result = mysqli_query($link,"SELECT * FROM clases_usuarios WHERE id_clase='$idClase'");
		return mysqli_num_rows($result);
	}
?>