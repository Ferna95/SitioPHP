<?php include("permisos.php") ?>
<?php validarPermisos($_SERVER['REQUEST_URI'])?>
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
<html lang="es">
    <head>
        <title>Simple example about CSS3 animations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>
    <body>
        <header>
        	<div class="header">
                <a href="index.php"><img alt="Puerta de escape a la página principal" class="icon" src="images/icon.png" /></a>
        		<nav class="span-header">

        			<ul class="links-header">
                        <?php if(isset($_SESSION['TipoUsuario'])){?>
                            <?php if($_SESSION['TipoUsuario'] == 0){?>
                                <li class="link"><a>Administrador</a>
                                    <ul>
                                        <li><a href="admin-usuarios.php">Usuarios</a></li>
                                        <li><a href="admin-clases.php">Clases</a></li>
                                        <li><a href="admin-inscripciones.php">Inscripciones de socios</a></li>
                                    </ul>
                                </li>
                            <?php } else if($_SESSION['TipoUsuario'] == 1){?>
                                <li class="link"><a href="calendario.php">Inscribirse</a></li>
                            <?php } ?>
                        <?php } ?>
        				<li class="link"><a href="about.php">Sobre Nosotros</a></li>
        				<li class="link"><a href="clases.php">Clases</a></li>
        			</ul>
        		</nav>
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
        	
        	<div id="modal-login" class="modal-login modal" hidden>
        		<form action="login.php" method="POST" onsubmit="return valida(this)">
        			<h1>Inicio de sesión</h1>
        			<ul class="tabla tabla-login">
                        <li>
                            <ul class="tabla-row row1">
                                <li class="tabla-cell cell1">Usuario:</li>
                                <li class="tabla-cell cell2"><input required title="usuario" class="input-text" type="text" id="usuario" name="usuario" /></li>
                            </ul>
                            <ul class="tabla-row row2">
                                <li class="tabla-cell cell1">Clave:</li>
                                <li class="tabla-cell cell2"><input required title="clave" class="input-text" type="password" id="clave" name="clave" /></li>
                            </ul>
                            <ul class="tabla-row row3 row-right">
                                <li class="tabla-cell cell1"><a href="usuario-registro.php">Registrarse</a></li>
                                <li class="tabla-cell cell-colspan2"><input title="button" type="submit" value="Ingresar" class="button button-login"/></li>
                            </ul>
                        </li>
        			</ul>
        		</form>
        	</div>
        </header>