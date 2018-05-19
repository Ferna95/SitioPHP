<?php include("util.php"); ?>
<?php

	function getInscripciones($inicio,$cant){
		include("conexion.inc");
		$result = mysqli_query($link,"SELECT * FROM clases_usuarios order by clases_usuarios.usuario asc limit ".$inicio.",".$cant);
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

	function getAllInscripciones(){
		include("conexion.inc");
		$result = mysqli_query($link,"SELECT * FROM clases_usuarios");
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


	function insertInscripcion($usuario,$clase,$estado){
		include("conexion.inc");

		$result = mysqli_query($link, "SELECT * FROM usuarios where usuario='$usuario'");
		if(mysqli_num_rows($result) == 0){
			header('Location: admin-inscripciones.php?m=No existe ese nombre de usuario');
		}
		else{
			$result = mysqli_query($link, "SELECT * FROM clases_usuarios where usuario='$usuario' and id_clase='$clase'");
			if(mysqli_num_rows($result)==0){
				$result = mysqli_query($link,"INSERT INTO clases_usuarios (usuario,id_clase,estado) VALUES 
					('$usuario','$clase','$estado')") or die("No se ha podido ingresar inscripción");

				header('Location: admin-inscripciones.php');	
			}
			else{
				header('Location: admin-inscripciones.php?m=El usuario ya se encuentra registrado en esa clase');
			}
		}		
	}

	function updateInscripcion($usuario,$clase,$estado){
		include("conexion.inc");
		if( $estado != 1 ){
			$estado = 1;
		} 
		else{
			$estado =0;
		}
		$result = mysqli_query($link,"UPDATE clases_usuarios SET estado='$estado' WHERE id_clase='$clase' and usuario='$usuario'") 
			or die("No se ha podido actualizar la inscripción");

		header('Location: admin-inscripciones.php');	
	}

	function deleteInscripcion($id){
		include("conexion.inc");

		$result = mysqli_query($link,"DELETE FROM clases_usuarios WHERE id_inscripcion='$id'") or die ("No se ha podido eliminar la inscripcion");

		header('Location: admin-inscripciones.php');
	}


	if(isset($_POST['mode'])){
		switch ($_POST['mode']) {
			case 'New':
			{
				$usuario = $_POST['usuario'];
				$clase = $_POST['clase'];
				if(isset($_POST['estado'])){
					$estado = 1;
				}
				else{
					$estado = 0;
				}
				insertInscripcion($usuario,$clase,$estado);
				break;
			}
			
			case 'Update':
			{
				$usuario = $_POST['usuario'];
				$clase = $_POST['clase'];
				$estado =  $_POST['estado'];
				updateInscripcion($usuario,$clase,$estado);
				break;
			}
			case 'Delete':
			{
				$id = $_POST['id'];
				deleteInscripcion($id);
				break;
			}
			default:
			{	# code...
				break;
			}	
		}
	}

	
?>