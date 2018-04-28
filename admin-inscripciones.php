<?php include("head.php") ?>
<?php include("inscripciones-adapter.php") ?>
<?php include("clase-adapter.php") ?>
	<div class="contenedor">
		<div class="admin-inscripciones">
			<br>
			<br>
			<br>

			<div class="new-container modal" id="new-containter" hidden=true>
				<form action="inscripciones-adapter.php" method="post" onsubmit="return validarInscripcion(this)">
					<table class="tabla tabla-new-inscripcion">
						<tr>
							<td><label class="lbl-new-inscripcion">Usuario</label></td>
							<td><input type="text" name="usuario" class="input-text"></td>
						</tr>
						<tr>
							<td><label class="lbl-new-inscripcion">Clase</label></td>
							<td>
								<select name="clase" class="input-text">
									<?php $clases = getClases(); ?>
									<?php for($i = 0; $i< count($clases) ; $i++) { ?>
										<option value="<?php echo $clases[$i]['id_clase']; ?>">
											<?php echo $clases[$i]['nombre']; ?>	
										</option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="lbl-new-inscripcion">Estado</label></td>
							<td><input type="checkbox" checked="true" name="estado" class="input-text"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="row-right"><input type="submit" class="button" value="Agregar"></td>
						</tr>
					</table>
					<input type="hidden" name="mode" value="New">
				</form>
			</div>

			<div class="listado-inscripciones">
				<h3>
					<a rel="modal:open" href="#new-containter" class="link add-inscripcion">Agregar nueva inscripcion +</a>
				</h1>
				<table class="inscripciones-table table">
					<tr class="tr2">
						<th>Usuario</th>
						<th>Clase</th>
						<th>Habilitado</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
					<?php $inscripciones = getInscripciones() ?>
					<?php if ($inscripciones) { ?>
						<?php for($i=0;$i<count($inscripciones);$i++){ ?>
							<?php if($i%2==0){ ?>
								<tr class="tr2">
							<?php }else{ ?>
								<tr class="tr1">
							<?php } ?>
									<td><?php echo $usuario = $inscripciones[$i]['usuario'] ;?></td>
									<td><?php echo $clase = $inscripciones[$i]['id_clase'] ;?></td>
									<td><?php echo $estado = getEstado($inscripciones[$i]['estado']) ;?></td>
									<td>
										<form action="inscripciones-adapter.php" method="post" onsubmit="return seguro()">
											<input type="hidden" name="id" value="<?php echo $inscripciones[$i]['id_inscripcion']; ?>" />
											<input type="hidden" name="clase" value="<?php echo $inscripciones[$i]['id_clase']; ?>" />
											<input type="hidden" name="usuario" value="<?php echo $usuario; ?>" />
											<input type="hidden" name="estado" value="<?php echo $inscripciones[$i]['estado']; ?>" />
											<input type="hidden" name="mode" value="Update">
											<input type="submit" class="button" value="Habilitar/Deshabilitar" />
										</form>
									</td>
									<td>
										<form action="inscripciones-adapter" method="post" onsubmit="return seguro()">
											<input type="hidden" name="id" value="<?php echo $inscripciones[$i]['id_inscripcion']; ?>" />
											<input type="hidden" name="mode" value="Delete">
											<input type="submit" class="button" value="Eliminar" />
										</form>
									</td>
								</tr>	
						<?php } ?>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
<?php include("foot.php") ?>