<?php
	
	$link = mysqli_connect("localhost","root") or die("No se pudo acceder a la base de datos");
	mysqli_select_db($link,"gimnasio");

?>