
<?php include("head.php") ?>
<?php include("util.php") ?>
	<div class="contenedor">
		<div class="admin-usuarios">
			
			<div class="div-form">
				<h1>Editar usuario</h1>
				<form action="usuario-adapter.php" method="post" id="form-login" onsubmit="return validarUser(this)">
					<input type="hidden" name="usuario" value="<?php echo $_POST['usuario'];?>" />
					<input type="hidden" name="mode" value="Update" />
					<table class="tabla tabla-update-usuario">
						<tr>
							<td><label class="lbl-update-usuario">Clave</label></td>
							<td><input type="password" name="clave" class="input-text"
								value="<?php echo $_POST['clave'] ;?>"></td>
							<td><label class="lbl-update-usuario">E-mail</label></td>
							<td><input type="text" name="mail" class="input-text"
								value="<?php echo $_POST['mail'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Repita clave</label></td>
							<td><input type="password" name="clave2" class="input-text"
								value="<?php echo $_POST['clave'] ;?>"></td>
							<td><label class="lbl-update-usuario">Teléfono</label></td>
							<td><input type="text" name="telefono" class="input-text"
								value="<?php echo $_POST['telefono'] ;?>"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Nombre</label></td>
							<td><input type="text" name="nombre" class="input-text"
								value="<?php echo $_POST['nombre'] ;?>"></td>
							<td><label class="lbl-update-usuario">Tipo</label></td>
							<td>
								<select name="tipo" class="input-text">
									<option value="0" <?php if ($_POST['tipo'] == 0) echo 'selected=selected' ?> >Administrador</option>
									<option value="1" <?php if ($_POST['tipo'] == 1) echo 'selected=selected' ?> >Socio</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Apellido</label></td>
							<td><input type="text" name="apellido" class="input-text"
								value="<?php echo $_POST['apellido'] ;?>"></td>
							<td><label class="lbl-update-usuario">Habilitado</label></td>
							<td>
								<?php 
									if ($_POST['estado'] == 1) {
										echo "<input type='checkbox' name='estado' class='input-text' checked />";
									}
									else{
										echo "<input type='checkbox' name='estado' class='input-text' />";
									}
								?>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="row-right"><input type="submit" class="button" value="Modificar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php include("foot.php") ?>