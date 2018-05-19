<?php session_start()?>
<?php include("head.php") ?>
<?php include("util.php") ?>
	<div class="contenedor">
		<div class="admin-clases">

			<div class="div-form">
				<h1>Nuevo usuario</h1>
				<form action="usuario-adapter.php" method="post" onsubmit="return validarUser(this)">
					<input type="hidden" name="mode" value="NewNonAutenticated" />
					<input type="hidden" name="tipo" value="1">
					<input type="hidden" name="estado" value="0">
					<table class="tabla tabla-update-usuario">
						<tr>
							<td><label class="lbl-update-usuario">Usuario</label></td>
							<td><input required max-length="50" type="text" name="usuario" class="input-text"></td>
							<td><label class="lbl-update-usuario">Nombre</label></td>
							<td><input required max-length="50" type="text" name="nombre" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Clave</label></td>
							<td><input required max-length="50" type="password" name="clave" class="input-text"></td>
							<td><label class="lbl-update-usuario">Apellido</label></td>
							<td><input required max-length="50" type="text" name="apellido" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Repetir clave</label></td>
							<td><input required max-length="50" type="password" name="clave2" class="input-text"></td>
							<td><label class="lbl-update-usuario">E-mail</label></td>
							<td><input required max-length="50" type="email" name="mail" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-update-usuario">Teléfono</label></td>
							<td><input required max-length="50" type="tel" name="telefono" class="input-text"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="row-right"><input type="submit" class="button" value="Registrarse"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php include("foot.php") ?>