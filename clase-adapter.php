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
		$result = mysqli_query($link,"SELECT * FROM clases_usuarios WHERE id_clase='$idClase' and estado=1");
		return mysqli_num_rows($result);
	}

	function insertClase($nombre,$dia,$hora,$profesor,$cupo,$descripcion){
		include("conexion.inc");

		$result = mysqli_query($link, "SELECT * FROM clases where dia=$dia and hora=$hora");

		if(mysqli_num_rows($result)==0){
			$result = mysqli_query($link,"INSERT INTO clases (nombre,dia,hora,nombre_profesor,cupo,descripcion) VALUES 
				('$nombre','$dia','$hora','$profesor','$cupo','$descripcion')") or die("No se ha podido ingresar clase");

			if($result){
				include("util.php");
				sendMails($nombre,getWeekDay($dia),$hora.":00",$profesor,$cupo,$descripcion);
			}
			header('Location: admin-clases.php');	
		}
		else{
			header('Location: admin-clases.php?m=Ya existe clase en ese horario');
		}
		
	}

	function updateClase($id,$nombre,$dia,$hora,$profesor,$cupo,$descripcion){
		include("conexion.inc");

		$result = mysqli_query($link, "SELECT * FROM clases where dia=$dia and hora=$hora and id_clase!=$id");

		if(mysqli_num_rows($result)==0){
			$result = mysqli_query($link,"UPDATE clases SET nombre='$nombre', dia='$dia', hora='$hora', nombre_profesor='$profesor', cupo='$cupo', descripcion='$descripcion' WHERE id_clase='$id'") 
				or die("No se ha podido actualizar clase");

			header('Location: admin-clases.php');
		}
		else{
			header('Location: admin-clases.php?m=Ya existe clase en ese horario');
		}	
	}

	function deleteClase($id){
		include("conexion.inc");

		$result = mysqli_query($link,"DELETE FROM clases_usuarios WHERE id_clase='$id'") or die ("No se ha podido eliminar la clase");

		$result = mysqli_query($link,"DELETE FROM clases WHERE id_clase='$id'") or die ("No se ha podido eliminar la clase");

		header('Location: admin-clases.php');
	}

	function sendMails($nombre,$dia,$hora,$profesor,$cupo,$descripcion){
		include ("conexion.inc");
		$result = mysqli_query($link, "SELECT mail from usuarios");
		if (mysqli_num_rows($result) != 0){
			for($i = 0; $i < mysqli_num_rows($result);$i++){
				$fila = mysqli_fetch_array($result);
				mail($fila['mail'], "NUEVAS CLASES", "HERMOS AGREGADO UNA NUEVA CLASE DE $nombre PARA EL DÍA $dia a las $hora HORAS");
			}
		}
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
				$descripcion = $_POST['descripcion'];
				insertClase($nombre,$dia,$hora,$profesor,$cupo,$descripcion);
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
				$descripcion = $_POST['descripcion'];
				updateClase($id,$nombre,$dia,$hora,$profesor,$cupo,$descripcion);
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