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
        <div class="contenedor">
        	<div class="header">
        		<span class="span-header">
        			<ul class="links-header">
        				<li class="link"><a href="">Sobre Nosotros</a></li>
        				<li class="link"><a href="">Clases</a></li>
        				<li class="link"><a href="">Inscribirse</a></li>
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

        	<div class="slider-container">
        		<img class="img1" src="https://lh3.googleusercontent.com/8w3cPZkDLEmEK0JKZIkbEB-QBLuQORU6q_NkBiDGBoGCaHdsEqYHlYy8UTiQq11mEQ=h900">
        		<img class="img2" src="https://hdwallsource.com/img/2014/6/wallpapers-hd-7974-8304-hd-wallpapers.jpg">
        		<img class="img3" src="https://hdwallsource.com/img/2014/2/cool-wallpapers-hd-8087-8418-hd-wallpapers.jpg">

                <nav class="nav-radio">
                    <input type="radio" id="cb" class="c1" name="cb" checked="true"/>
                    <input type="radio" id="cb" class="c2" name="cb" />
                    <input type="radio" id="cb" class="c3" name="cb" />
                </nav>
        	</div>

        	

        	<div class="news">
                <div class="new">
                    <div class="content-new">
                        <img class="img-new" src="" />
                        <h2 class="title-new">Todas las rutinas</h2>
                        <p class="p-new">Consultá con nuestros profesionales todas las rutinas
                        que tenemos para vos según tus objetivos ¡Ellos están para ayudarte!</p>
                    </div>
                </div>
                <div class="new">
                    <div class="content-new">
                        <img class="img-new" src="" />
                        <h2 class="title-new">Clases todos los días</h2>
                        <p class="p-new">Sumate a las clases personalizadas que dictamos 
                        todos los días, siempre con el apoyo de nuestros profesionales ¡Recordá inscribirte para asistir!</p>
                    </div>
                </div>
            </div>



        </div>


       
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
	<script src="js/jquery.smoothState.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script type="text/javascript">
    	$(document).ready(function() {
  			$('.img3').hide();
  			$('.img2').hide();
		});

    	$('.c1').on("click", function(e){
    		$('.img1').show();
    		$('.img2').hide();
    		$('.img3').hide();
    	});

    	$('.c2').on("click", function(e){
    		$('.img1').hide();
    		$('.img2').show();
    		$('.img3').hide();
    	});

    	$('.c3').on("click", function(e){
    		$('.img1').hide();
    		$('.img2').hide();
    		$('.img3').show();
    	});

    	$(document).on('click.modal', 'a[rel~="modal:open"]', function(event) {
    		event.preventDefault();
    		$(this).modal();
 		});
    </script>
    </body>
</html>