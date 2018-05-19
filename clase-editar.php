<?php session_start()?>
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
							<td><input required type="text" name="nombre" class="input-text"
								value="<?php echo $_POST['nombre'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-clase">Dia</label></td>
							<td>
								<select name="dia" class="input-text">
									<option value="1" <?php if ($_POST['dia'] == 1) echo 'selected=selected' ?>>Lunes</option>
									<option value="2" <?php if ($_POST['dia'] == 2) echo 'selected=selected' ?>>Martes</option>
									<option value="3" <?php if ($_POST['dia'] == 3) echo 'selected=selected' ?>>Miércoles</option>
									<option value="4" <?php if ($_POST['dia'] == 4) echo 'selected=selected' ?>>Jueves</option>
									<option value="5" <?php if ($_POST['dia'] == 5) echo 'selected=selected' ?>>Viernes</option>
									<option value="6" <?php if ($_POST['dia'] == 6) echo 'selected=selected' ?>>Sábado</option>
									<option value="7" <?php if ($_POST['dia'] == 7) echo 'selected=selected' ?>>Domingo</option>
								</select>
							</td>
						
							<td><label class="lbl-update-clase">Horario</label></td>
							<td>
								<select name="hora" class="input-text">
									<option value="7" <?php if ($_POST['hora'] == 7) echo 'selected=selected' ?>>07:00 - 08:00</option>
									<option value="8" <?php if ($_POST['hora'] == 8) echo 'selected=selected' ?>>08:00 - 09:00</option>
									<option value="9" <?php if ($_POST['hora'] == 9) echo 'selected=selected' ?>>09:00 - 10:00</option>
									<option value="10" <?php if ($_POST['hora'] == 10) echo 'selected=selected' ?>>10:00 - 11:00</option>
									<option value="11" <?php if ($_POST['hora'] == 11) echo 'selected=selected' ?>>11:00 - 12:00</option>
									<option value="12" <?php if ($_POST['hora'] == 12) echo 'selected=selected' ?>>12:00 - 13:00</option>
									<option value="13" <?php if ($_POST['hora'] == 13) echo 'selected=selected' ?>>13:00 - 14:00</option>
									<option value="14" <?php if ($_POST['hora'] == 14) echo 'selected=selected' ?>>14:00 - 15:00</option>
									<option value="15" <?php if ($_POST['hora'] == 15) echo 'selected=selected' ?>>15:00 - 16:00</option>
									<option value="16" <?php if ($_POST['hora'] == 16) echo 'selected=selected' ?>>16:00 - 17:00</option>
									<option value="17" <?php if ($_POST['hora'] == 17) echo 'selected=selected' ?>>17:00 - 18:00</option>
									<option value="18" <?php if ($_POST['hora'] == 18) echo 'selected=selected' ?>>18:00 - 19:00</option>
									<option value="19" <?php if ($_POST['hora'] == 19) echo 'selected=selected' ?>>19:00 - 20:00</option>
									<option value="20" <?php if ($_POST['hora'] == 20) echo 'selected=selected' ?>>20:00 - 21:00</option>
									<option value="21" <?php if ($_POST['hora'] == 21) echo 'selected=selected' ?>>21:00 - 22:00</option>
									<option value="22" <?php if ($_POST['hora'] == 22) echo 'selected=selected' ?>>22:00 - 23:00</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="lbl-update-clase">Profesor</label></td>
							<td><input required type="text" name="profesor" class="input-text"
								value="<?php echo $_POST['profesor'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-clase">Cupo</label></td>
							<td><input required type="number" min="1" max="50" name="cupo" class="input-text"
								value="<?php echo $_POST['cupo'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-clase">Descripcion</label></td>
							<td colspan="3"><textarea required  type="text" name="descripcion" class="input-text"
								value="<?php echo $_POST['descripcion'] ;?>"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><input type="submit" class="button" value="Modificar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php include("foot.php") ?>