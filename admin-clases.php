//ARREGLAR

<?php include("head.php") ?>
<?php include("clases.php") ?>
	<div class="contenedor">
		<div class="calendario">
			<h1>Clases</h1>
			<br>
			<a href="">Agregar nueva clase +</a>
			<div class="new-container">
				<form action="clase-alta.php" method="post">
					<label>Nombre:</label>
					<input type="text" name="nombre">

					<label>Dia:</label>
					<select name="dia">
						<option value="1">Lunes</option>
						<option value="2">Martes</option>
						<option value="3">Miércoles</option>
						<option value="4">Jueves</option>
						<option value="5">Viernes</option>
						<option value="6">Sábado</option>
						<option value="7">Domingo</option>
					</select>

					<label>Horario:</label>
					<select name="hora">
						<option value="7">07:00 - 08:00</option>
						<option value="8">08:00 - 09:00</option>
						<option value="9">09:00 - 10:00</option>
						<option value="10">10:00 - 11:00</option>
						<option value="11">11:00 - 12:00</option>
						<option value="12">12:00 - 13:00</option>
						<option value="13">13:00 - 14:00</option>
						<option value="14">14:00 - 15:00</option>
						<option value="15">15:00 - 16:00</option>
						<option value="16">16:00 - 17:00</option>
						<option value="17">17:00 - 18:00</option>
						<option value="18">18:00 - 19:00</option>
						<option value="19">19:00 - 20:00</option>
						<option value="20">20:00 - 21:00</option>
						<option value="21">21:00 - 22:00</option>
						<option value="22">22:00 - 23:00</option>
					</select>

					<label>Profesor:</label>
					<input type="text" name="profesor">
					
					<label>Cupo:</label>
					<input type="text" name="cupo">
					
				</form>
			</div>
			<table class="clases-table table">
				<tr class="tr2">
					<th>Clase</th>
					<th>Día</th>
					<th>Hora</th>
					<th>Cupo Máximo</th>
					<th>Cantidad de Inscriptos</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
				<?php print_r(getClases()); ?>
				<?php for($i=0;$i<10;$i++){ ?>
					<?php if($i%2==0){ ?>
						<tr class="tr2">
					<?php }else{ ?>
						<tr class="tr1">
					<?php } ?>
							<td><?php echo "Nombre de clase" ;?></td>
							<td><?php echo "Nombre de clase" ;?></td>
							<td><?php echo "Nombre de clase" ;?></td>
							<td><?php echo "Nombre de clase" ;?></td>
							<td><?php echo "Nombre de clase" ;?></td>
							<td>
								<form action="clase-editar.php" method="post">
									<input type="hidden" name="dia" value="<?php echo "hola"; ?>" />
									<input type="hidden" name="hora" value="<?php echo "hola";?>" />
									<input type="submit" class="button-inscribir" value="Editar" />
								</form>
							</td>
							<td>
								<form action="clase-baja.php" method="post">
									<input type="hidden" name="dia" value="<?php echo "hola";?>" />
									<input type="hidden" name="hora" value="<?php echo "hola";?>" />
									<input type="submit" class="button-inscribir" value="Eliminar" />
								</form>
							</td>
						</tr>	
				<?php } ?>
			</table>
		</div>
	</div>
<?php include("foot.php") ?>