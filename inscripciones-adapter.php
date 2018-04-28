<?php include("util.php"); ?>

<?php

	function getInscripciones(){
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
		$result = mysqli_query($link, "SELECT * FROM clases_usuarios where usuario='$usuario' and id_clase='$clase'");
		if(mysqli_num_rows($result)==0){
			$result = mysqli_query($link,"INSERT INTO clases_usuarios (usuario,id_clase,estado) VALUES 
				('$usuario','$clase','$estado')") or die("No se ha podido ingresar inscripción");

			header('Location: admin-inscripciones.php');	
		}
		else{
			print "YA EXISTE UNA INSCRIPCIÓN DE ESE USUARIO EN ESA CLASE";
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
				$estado =  getCheck($_POST['estado']);
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