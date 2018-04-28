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
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>
    <body>
    	<?php session_start()?>
        <?php include("permisos.php") ?>
        <?php validarPermisos($_SERVER['REQUEST_URI'])?>
        <header>
        	<div class="header">
                <a href="index.php"><img class="icon" src="images/icon.png" /></a>
        		<span class="span-header">

        			<ul class="links-header">
                        <?php if(isset($_SESSION['TipoUsuario'])){?>
                            <?php if($_SESSION['TipoUsuario'] == 0){?>
                                <li class="link"><a>Administrador</a>
                                    <ul>
                                        <li><a href="admin-usuarios.php">Usuarios</a></li>
                                        <li><a href="admin-clases.php">Clases</a></li>
                                    </ul>
                                </li>
                            <?php } else if($_SESSION['TipoUsuario'] == 1){?>
                                <li class="link"><a href="calendario.php">Inscribirse</a></li>
                            <?php } ?>
                        <?php } ?>
        				<li class="link"><a href="about.php">Sobre Nosotros</a></li>
        				<li class="link"><a href="clases.php">Clases</a></li>
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
        				<a rel="modal:open" href="#modal-login" class="link">Ingresar / Registrarse</a>
        			<?php } ?>
        		</span>
        	</div>

            <div class="back-header">
            </div>
        	
        	<div id="modal-login" class="modal-login modal" hidden="true">
        		<form action="login.php" method="POST" onsubmit="return valida(this)">
        			<h1>Inicio de sesión</h1>
        			<table class="tabla tabla-login">
        				<tr class="tabla-row row1">
        					<td class="tabla-cell cell1">Usuario:</td>
        					<td class="tabla-cell cell2"><input class="input-text" type="text" id="usuario" name="usuario" /></td>
        				</tr>
        				<tr class="tabla-row row2">
        					<td class="tabla-cell cell1">Clave:</td>
        					<td class="tabla-cell cell2"><input class="input-text" type="password" id="clave" name="clave" /></td>
        				</tr>
        				<tr class="tabla-row row3 row-right">
        					<td class="tabla-cell cell1"><a href="usuario-registro.php">Registrarse</a></td>
        					<td class="tabla-cell cell-colspan2"><input type="submit" value="Ingresar" class="button button-login"/></td>
        				</tr>
        			</table>
        		</form>
        	</div>
        </header>