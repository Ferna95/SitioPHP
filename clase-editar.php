
<?php include("head.php") ?>
<?php include("util.php") ?>
	<div class="contenedor">
		<div class="admin-clases">

			<div class="div-form">
				<h1>Editar clase</h1>
				<form action="clase-adapter.php" method="post" onsubmit="return validarClase(this)">
					<input type="hidden" name="id" value="<?php echo $_POST['id'];?>" />
					<input type="hidden" name="mode" value="Update" />
					<table class="tabla tabla-update-clase">
						<tr>
							<td><label class="lbl-update-clase">Nombre</label></td>
							<td><input type="text" name="nombre" class="input-text"
								value="<?php echo $_POST['nombre'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-clase">Dia</label></td>
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
						
							<td><label class="lbl-update-clase">Horario</label></td>
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
							<td><label class="lbl-update-clase">Profesor</label></td>
							<td><input type="text" name="profesor" class="input-text"
								value="<?php echo $_POST['profesor'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-clase">Cupo</label></td>
							<td><input type="text" name="cupo" class="input-text"
								value="<?php echo $_POST['cupo'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-clase">Descripcion</label></td>
							<td><input type="text" name="descripcion" class="input-text"
								value="<?php echo $_POST['descripcion'] ;?>"></td>
							<td></td>
							<td><input type="submit" class="button" value="Modificar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php include("foot.php") ?>