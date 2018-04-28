<?php
	session_start();
	unset($_SESSION["Usuario"]);
	unset($_SESSION["TipoUsuario"]);
	unset($_SESSION["EstadoUsuario"]);
	header('Location: index.php');
?>