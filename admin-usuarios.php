<?php session_start()?>
<?php include("head.php") ?>
<?php include("usuario-adapter.php") ?>

	<div class="contenedor">
		<div class="admin-usuarios">
			<h1>Usuarios</h1>

			<div class="new-container modal" id="new-containter" hidden=true>
				<h1>Nuevo Usuario</h1>
				<form action="usuario-adapter.php" method="post" onsubmit="return validarUser(this)">
					<table class="tabla tabla-new-usuario">
						<tr>
							<td><label class="lbl-new-usuario">Usuario</label></td>
							<td><input required max-length="50" type="text" name="usuario" class="input-text"></td>
							<td><label class="lbl-new-usuario">Nombre</label></td>
							<td><input required max-length="50" type="text" name="nombre" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-new-usuario">Clave</label></td>
							<td><input required max-length="50" type="password" name="clave" class="input-text"></td>
							<td><label class="lbl-new-usuario">Apellido</label></td>
							<td><input required max-length="50" type="text" name="apellido" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-new-usuario">Repita clave</label></td>
							<td><input required max-length="50" type="password" name="clave2" class="input-text"></td>
							<td><label class="lbl-new-usuario">Teléfono</label></td>
							<td><input required max-length="50" type="tel" name="telefono" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-new-usuario">Tipo</label></td>
							<td>
								<select name="tipo" class="input-text">
									<option value="0">Administrador</option>
									<option value="1">Socio</option>
								</select>
							</td>
							<td><label class="lbl-new-usuario">E-mail</label></td>
							<td><input required max-length="50" type="email" name="mail" class="input-text"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><label class="lbl-new-usuario">Habilitado</label></td>
							<td class="row-right">
								<input type="checkbox" checked name="estado" class="input-text">
								<input type="submit" class="button" value="Agregar">
							</td>
						</tr>
					</table>
					<input type="hidden" name="mode" value="New">
				</form>
			</div>
			
			<div class="listado-usuarios">
				<h3 class="row-left">
					<a rel="modal:open" href="#new-containter" class="link add-usuarios">Agregar nuevo usuario +</a>
				</h3>
				<table class="usuarios-table table">
					<tr class="tr2">
						<th>Usuario</th>
						<th>Nombre y Apellido</th>
						<th>Teléfono</th>
						<th>E-mail</th>
						<th>Tipo</th>
						<th>Habilitado</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
					<?php $usuarios = getUsuarios() ?>
					<?php for($i=0;$i<count($usuarios);$i++){ ?>
						<?php if($i%2==0){ ?>
							<tr class="tr2">
						<?php }else{ ?>
							<tr class="tr1">
						<?php } ?>
								<td><?php echo $usuario = $usuarios[$i]['usuario'] ;?></td>
								<td><?php echo (($nombre = $usuarios[$i]['nombre']) . " " . 
								($apellido = $usuarios[$i]['apellido'])) ;?></td>
								<td><?php echo $telefono = $usuarios[$i]['telefono'] ;?></td>
								<td><?php echo $mail = $usuarios[$i]['mail'] ;?></td>
								<td><?php echo getRole($tipo = $usuarios[$i]['tipo']) ;?></td>
								<td><?php echo getEstado($estado = $usuarios[$i]['estado']) ;?></td>
								<td>
									<form action="usuario-editar.php" method="post">
										<input type="hidden" name="usuario" value="<?php echo $usuarios[$i]['usuario']; ?>" />
										<input type="hidden" name="clave" value="<?php echo $usuarios[$i]['clave']; ?>" />
										<input type="hidden" name="nombre" value="<?php echo $nombre; ?>" />
										<input type="hidden" name="apellido" value="<?php echo $apellido; ?>" />
										<input type="hidden" name="telefono" value="<?php echo $telefono ;?>" />
										<input type="hidden" name="mail" value="<?php echo $mail; ?>" />
										<input type="hidden" name="tipo" value="<?php echo $tipo; ?>" />
										<input type="hidden" name="estado" value="<?php echo $estado; ?>" />
										<input type="submit" class="button" value="Editar" />
									</form>
								</td>
								<td>
									<form action="usuario-adapter.php" method="post" onsubmit="return seguro()"">
										<input type="hidden" name="usuario" value="<?php echo $usuarios[$i]['usuario']; ?>" />
										<input type="hidden" name="mode" value="Delete">
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