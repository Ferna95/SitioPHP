<!DOCTYPE html>
<!--
    Author: Rolando Caldas Sanchez
    Blog: http://rolandocaldas.com/
    Google+: https://plus.google.com/+RolandoCaldasSanchez
    Linkedin: http://www.linkedin.com/in/rolandocaldas
    Twitter: https://twitter.com/rolando_caldas

    This file is part of an article:
    http://rolandocaldas.com/html5/slider-css-sin-javascript-automatico 
-->
<html>
    <head>
        <title>Simple example about CSS3 animations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/demo.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
    	<?php session_start()?>
        <header>
        	<div class="header">
        		<span class="span-header">
        			<ul class="links-header">
        				<li class="link"><a href="">Sobre Nosotros</a></li>
        				<li class="link"><a href="">Clases</a></li>
        				<li class="link"><a href="inscripcion.php">Inscribirse</a></li>
        			</ul>
        		</span>
        		<span class="user-menu">
        			<?php if(isset($_SESSION['Usuario'])){ ?>
        				<label class="username field"><?php echo $_SESSION['Usuario'] ?></Label>
        			<?php } ?>

        			<?php if(isset($_SESSION['Usuario'])){ ?>
        				<form class="logout-form" action="logout.php" method="post">
        					<input type="submit" class="button button-salir field" value="Cerrar sesión">
        				</form>
        			<?php } else{ ?>
        				<a rel="modal:open" href="#modal-login" class="link">Ingresar</a>
        			<?php } ?>
        		</span>
        	</div>
        	
        	<div id="modal-login" class="modal-login" hidden="true">
        		<form action="login.php" method="POST">
        			<h1>Inicio de sesión</h1>
        			<table class="tabla tabla-login">
        				<tr class="tabla-row row1">
        					<td class="tabla-cell cell1">Usuario:</td>
        					<td class="tabla-cell cell2"><input class="input-text" type="text" name="usuario" /></td>
        				</tr>
        				<tr class="tabla-row row2">
        					<td class="tabla-cell cell1">Clave:</td>
        					<td class="tabla-cell cell2"><input class="input-text" type="password" name="clave" /></td>
        				</tr>
        				<tr class="tabla-row row3">
        					<td class="tabla-cell cell1"><a href="">Olvidé mi clave</a></td>
        					<td class="tabla-cell cell-colspan2"><input type="submit" value="Ingresar" class="button"/></td>
        				</tr>
        			</table>
        		</form>
        	</div>
        </header>