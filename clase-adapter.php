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

	function insertClase($nombre,$dia,$hora,$profesor,$cupo){
		include("conexion.inc");
		$result = mysqli_query($link,"INSERT INTO clases (nombre,dia,hora,nombre_profesor,cupo) VALUES 
			('$nombre','$dia','$hora','$profesor','$cupo')") or die("No se ha podido ingresar clase");

		header('Location: admin-clases.php');	
	}

	function updateClase($id,$nombre,$dia,$hora,$profesor,$cupo){
		include("conexion.inc");
		$result = mysqli_query($link,"UPDATE clases SET nombre='$nombre', dia='$dia', hora='$hora', nombre_profesor='$profesor', cupo='$cupo' WHERE id_clase='$id'") 
			or die("No se ha podido actualizar clase");

		header('Location: admin-clases.php');	
	}

	function deleteClase($id){
		include("conexion.inc");
		$result = mysqli_query($link,"DELETE FROM clases WHERE id_clase='$id'") or die ("No se ha podido eliminar la clase");

		header('Location: admin-clases.php');
	}

	if(isset($_POST['mode'])){
		switch ($_POST['mode']) {
			case 'New':
			{
				$nombre = $_POST['nombre'];
				$dia = $_POST['dia'];
				$hora = $_POST['hora'];
				$profesor = $_POST['profesor'];
				$cupo = $_POST['cupo'];
				insertClase($nombre,$dia,$hora,$profesor,$cupo);
				break;
			}
			
			case 'Update':
			{
				$id = $_POST['id'];
				$nombre = $_POST['nombre'];
				$dia = $_POST['dia'];
				$hora = $_POST['hora'];
				$profesor = $_POST['profesor'];
				$cupo = $_POST['cupo'];
				updateClase($id,$nombre,$dia,$hora,$profesor,$cupo);
				break;
			}
			case 'Delete':
			{
				$id = $_POST['id'];
				deleteClase($id);
				break;
			}
			default:
			{	# code...
				break;
			}	
		}
	}

	
?>