<?php
	function validarPermisos($path)
	{
		if(!isset($_SESSION['TipoUsuario'])){
			$_SESSION['TipoUsuario']=2;
		}

		switch ($_SESSION['TipoUsuario']) {
			case 0:
				if(parse_url($path, PHP_URL_PATH) == "/calendario.php"){
					header("Location: index.php");
				}
				break;
			case 1:
				if(parse_url($path, PHP_URL_PATH) == "/admin-usuarios.php" ||
				   parse_url($path, PHP_URL_PATH) == "/admin-clases.php" ||
				   parse_url($path, PHP_URL_PATH) == "/admin-inscripciones.php"){
					header("Location: index.php");
				}
				break;
			default:
				if(parse_url($path, PHP_URL_PATH) == "/calendario.php" ||
				   parse_url($path, PHP_URL_PATH) == "/admin-usuarios.php" ||
				   parse_url($path, PHP_URL_PATH) == "/admin-clases.php" ||
				   parse_url($path, PHP_URL_PATH) == "/admin-inscripciones.php"){
					header("Location: index.php");
				}
				break;
		}
		
	}
?>