<?php session_start()?>
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

	<p class="text-about">
		Somos el gimnasio más barato de Rosario, con mas de 35 años de experiencia en el sector. Hemos ido creciendo año a año con esfuerzo e ilusión por lo que nos gusta hacer, entrenar disfrutando.
		Nos esforzamos a diario en conocerte y en que consigas alcanzar todas tus metas de una forma divertida, haciendo que te sientas como en casa . Nuestro trato personal garantiza que todos los socios reciban la atención que merecen. Nuestro principal objetivo es hacer que se sientan felices. En Gimnasio Vida Fitness nos reinventamos cada día y creemos en la importancia de las personas, por eso contamos con el mejor equipo tanto técnico como humano, el cual formamos continuamente para seguir estando en la vanguardia..
	</p>

	<div class="send-mail">
		<p>Para ponerte en contacto con nosotros llena el formulario a continuación y contestaremos a la brevedad:</p>
		<form class="form-mail" action="mail.php" method="post">
			<table>
				<tr>
					<td><label>Tu nombre</label></td>
					<td><input required type="text" cols=30 name="nombre" class="field-mail"></td>
				</tr>
				<tr>
					<td><label>Tu E-mail</label></td>
					<td><input required type="email" cols=30 name="email" class="field-mail"></td>
				</tr>
				<tr>
					<td><label>Comentario</label></td>
					<td><textarea required name="comentario" cols=40 rows=2 class="field-mail field-mail-ta"></textarea></td>
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