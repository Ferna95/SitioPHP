
<?php 

	function validarPermisos($path)
	{
		if(!isset($_SESSION['TipoUsuario'])){
			$_SESSION['TipoUsuario']=2;
		}

		switch ($_SESSION['TipoUsuario']) {
			case 0:
				if($path == "/SitioPHP/calendario.php"){
					header("Location: index.php");
				}
				break;
			case 1:
				if($path == "/SitioPHP/admin-usuarios.php" ||
				   $path == "/SitioPHP/admin-clases.php" ||
				   $path == "/SitioPHP/admin-inscripciones.php"){
					header("Location: index.php");
				}
				break;
			default:
				if($path == "/SitioPHP/calendario.php" ||
				   $path == "/SitioPHP/admin-usuarios.php" ||
				   $path == "/SitioPHP/admin-clases.php" ||
				   $path == "/SitioPHP/admin-inscripciones.php"){
					header("Location: index.php");
				}
				break;
		}
		
	}


?>