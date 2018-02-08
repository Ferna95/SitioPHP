
<?php include("head.php") ?>
<?php include("clases.php") ?>
<?php include("util.php") ?>
	<div class="contenedor">
		<div class="admin-clases">
			<br>
			<br>
			<br>
			<div class="new-container modal" id="new-containter" hidden=true>
				<form action="clase-alta.php" method="post">
					<table class="tabla tabla-new-clase">
						<tr>
							<td><label class="lbl-new-clase">Nombre</label></td>
							<td><input type="text" name="nombre" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-new-clase">Dia</label></td>
							<td>
								<select name="dia" class="input-text">
									<option value="1">Lunes</option>
									<option value="2">Martes</option>
									<option value="3">Miércoles</option>
									<option value="4">Jueves</option>
									<option value="5">Viernes</option>
									<option value="6">Sábado</option>
									<option value="7">Domingo</option>
								</select>
							</td>
						
							<td><label class="lbl-new-clase">Horario</label></td>
							<td>
								<select name="hora" class="input-text">
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
							</td>
						</tr>
						<tr>
							<td><label class="lbl-new-clase">Profesor</label></td>
							<td><input type="text" name="profesor" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-new-clase">Cupo</label></td>
							<td><input type="text" name="cupo" class="input-text"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><input type="submit" class="button" value="Agregar"></td>
						</tr>
					</table>
				</form>
			</div>

			<div class="calendario">
				<table class="calendar-table table">
					<tr class="tr2">
						<th></th>
						<th>Lunes</th>
						<th>Martes</th>
						<th>Miércoles</th>
						<th>Jueves</th>
						<th>Viernes</th>
						<th>Sábado</th>
						<th>Domingo</th>
					</tr>
					<?php for($i=7;$i<=22;$i++){ ?>
						<?php if($i%2==0){ ?>
							<tr class="tr2">
						<?php }else{ ?>
							<tr class="tr1">
						<?php } ?>
								<td><?php echo "$i" . ":00 - " . ($i+1) .":00" ;?></td>
								<?php for($j=1;$j<=7;$j++){ ?>
									<td>
										<?php if(getClase($i,$j) != '0'){ ?>
											<?php echo getClase($i,$j); ?>
										<?php } ?>
									</td>
								<?php } ?>
							</tr>	
					<?php } ?>
				</table>
			</div>
			<div class="listado-clases">
				<h3>
					<a rel="modal:open" href="#new-containter" class="link add-clase">Agregar nueva clase +</a>
				</h1>
				<table class="clases-table table">
					<tr class="tr2">
						<th>Clase</th>
						<th>Día</th>
						<th>Hora</th>
						<th>Profesor</th>
						<th>Cupo Máximo</th>
						<th>Cantidad de Inscriptos</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
					<?php $clases = getClases() ?>
					<?php for($i=0;$i<count($clases);$i++){ ?>
						<?php if($i%2==0){ ?>
							<tr class="tr2">
						<?php }else{ ?>
							<tr class="tr1">
						<?php } ?>
								<td><?php echo $nombre = $clases[$i]['nombre'] ;?></td>
								<td><?php echo getWeekDay($dia = $clases[$i]['dia']) ;?></td>
								<td><?php echo ($hora = $clases[$i]['hora']) . ":00" ;?></td>
								<td><?php echo $nombre_profesor = $clases[$i]['nombre_profesor'] ;?></td>
								<td><?php echo $cupo = $clases[$i]['cupo'] ;?></td>
								<td><?php echo contarCupo($clases[$i]['id_clase']) ;?></td>
								<td>
									<form action="clase-editar.php" method="post">
										<input type="hidden" name="id_clase" value="<?php echo $clases[$i]['id_clase']; ?>" />
										<input type="hidden" name="nombre" value="<?php echo $nombre; ?>" />
										<input type="hidden" name="dia" value="<?php echo $dia ;?>" />
										<input type="hidden" name="hora" value="<?php echo $hora; ?>" />
										<input type="hidden" name="nombre_profesor" value="<?php echo $nombre_profesor; ?>" />
										<input type="hidden" name="cupo" value="<?php echo $cupo; ?>" />
										<input type="submit" class="button" value="Editar" />
									</form>
								</td>
								<td>
									<form action="clase-baja.php" method="post">
										<input type="hidden" name="id_clase" value="<?php echo $clases[$i]['id_clase']; ?>" />
										<input type="submit" class="button" value="Eliminar" />
									</form>
								</td>
							</tr>	
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
<?php include("foot.php") ?>