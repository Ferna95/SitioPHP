
<?php include("head.php") ?>
<?php include("util.php") ?>
	<div class="contenedor">
		<div class="admin-usuarios">
			<br>
			<br>
			<br>
			<div class="div-form">
				<h1>Editar usuario</h1>
				<form action="usuario-adapter.php" method="post">
					<input type="hidden" name="usuario" value="<?php echo $_POST['usuario'];?>" />
					<input type="hidden" name="mode" value="Update" />
					<table class="tabla tabla-update-usuario">
						<tr>
							<td><label class="lbl-update-usuario">Clave</label></td>
							<td><input type="password" name="clave" class="input-text"
								value="<?php echo $_POST['clave'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Nombre</label></td>
							<td><input type="text" name="nombre" class="input-text"
								value="<?php echo $_POST['nombre'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Apellido</label></td>
							<td><input type="text" name="apellido" class="input-text"
								value="<?php echo $_POST['apellido'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">E-mail</label></td>
							<td><input type="text" name="mail" class="input-text"
								value="<?php echo $_POST['mail'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Teléfono</label></td>
							<td><input type="text" name="telefono" class="input-text"
								value="<?php echo $_POST['telefono'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Tipo</label></td>
							<td>
								<select name="tipo" class="input-text">
									<option value="0">Administrador</option>
									<option value="1">Socio</option>
								</select>
							</td>
						
							<td><label class="lbl-update-usuario">Habilitado</label></td>
							<td><input type="checkbox" name="estado" class="input-text"
								checked="<?php echo $_POST['estado'] ;?>"></td>
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