<?php include("util.php"); ?>

<?php
	function getUsuarios(){
		include("conexion.inc");
		$result = mysqli_query($link,"SELECT * FROM usuarios");
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

	function insertUsuario($usuario,$clave,$nombre,$apellido,$mail,$telefono,$tipo,$estado){
		include("conexion.inc");

		$result = mysqli_query($link,"INSERT INTO usuarios (usuario,clave,nombre,apellido,mail,telefono,tipo,estado) VALUES 
			('$usuario','$clave','$nombre','$apellido','$mail','$telefono','$tipo','$estado')") or die("No se ha podido ingresar el usuario");

		header('Location: admin-usuarios.php');	
	}

	function updateUsuario($usuario,$clave,$nombre,$apellido,$mail,$telefono,$tipo,$estado){
		include("conexion.inc");
		$result = mysqli_query($link,"UPDATE usuarios SET clave='$clave', nombre='$nombre', apellido='$apellido', mail='$mail', telefono='$telefono', tipo='$tipo', estado='$estado' WHERE usuario='$usuario'") 
			or die("No se ha podido actualizar usuario");

		header('Location: admin-usuarios.php');	
	}

	function deleteUsuario($usuario){
		include("conexion.inc");
		$result = mysqli_query($link,"DELETE FROM usuarios WHERE usuario='$usuario'") or die ("No se ha podido eliminar el usuario");
		$result = mysqli_query($link,"DELETE FROM clases_usuarios WHERE usuario='$usuario'") or die ("No se ha podido eliminar el usuario");

		header('Location: admin-usuarios.php');
	}

	if(isset($_POST['mode'])){
		switch ($_POST['mode']) {
			case 'New':
			{
				$usuario = $_POST['usuario'];
				$clave = $_POST['clave'];
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$mail = $_POST['mail'];
				$telefono = $_POST['telefono'];
				$estado = getCheck($_POST['estado']);
				$tipo = $_POST['tipo'];
				insertUsuario($usuario,$clave,$nombre,$apellido,$mail,$telefono,$tipo,$estado);
				break;
			}
			
			case 'Update':
			{
				$usuario = $_POST['usuario'];
				$clave = $_POST['clave'];
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$mail = $_POST['mail'];
				$telefono = $_POST['telefono'];
				$estado = getCheck($_POST['estado']);
				$tipo = $_POST['tipo'];
				updateUsuario($usuario,$clave,$nombre,$apellido,$mail,$telefono,$tipo,$estado);
				break;
			}
			case 'Delete':
			{
				$usuario = $_POST['usuario'];
				deleteUsuario($usuario);
				break;
			}
			default:
			{	# code...
				break;
			}	
		}
	}

	
?>