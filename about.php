<?php include("head.php") ?>

<div class="content-about">

	<h1>GIMNASIO VIDA FITNESS</h1>

	<div id="map"></div>
    <script type="text/javascript">
      function initMap() {
        var uluru = {lat: -32.9612482, lng: -60.6379203};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfWWxKgGyDoIj1gr5BiK_yorRPunjvB9w&callback=initMap"></script>

	<p class="text-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<div class="send-mail">
		<p>Para ponerte en contacto con nosotros llena el formulario a continuación y contestaremos a la brevedad:</p>
		<form class="form-mail" action="mail.php" method="post">
			<table>
				<tr>
					<td><label>Tu nombre</label></td>
					<td><input type="text" cols=30 name="nombre" class="field-mail"></td>
				</tr>
				<tr>
					<td><label>Tu E-mail</label></td>
					<td><input type="text" cols=30 name="email" class="field-mail"></td>
				</tr>
				<tr>
					<td><label>Comentario</label></td>
					<td><textarea name="comentario" cols=40 rows=2 class="field-mail field-mail-ta"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="button button-mail" value="Enviar"></td>
				</tr>
			</table>
		</form>
	</div>	

</div>
<?php include("foot.php") ?>