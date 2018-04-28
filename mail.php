<?php
	$destinatario = "fernamariscotti@gmail.com";
	$asunto = "Consultas";
	$mensaje = "Nombre: " . $_POST['nombre'] . "<br>" . "Email: " . $_POST['email'] . "<br>" . $_POST['comentario'];

	mail($destinatario,$asunto,$mensaje);
?>