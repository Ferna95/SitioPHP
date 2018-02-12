<?php include("head.php") ?>
<?php include("clase-adapter.php") ?>
	<div class="contenedor">
		<div class="calendario">
			<h1>Clases semanales</h1>
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
										<form action="inscripcion.php" method="post">
											<?php echo getClase($i,$j); ?>
											<br>
											<input type="hidden" name="dia" value="<?php echo $j ?>" />
											<input type="hidden" name="hora" value="<?php echo $i ?>" />
											<input type="hidden" name="usuario" value="<?php echo $_SESSION['Usuario'] ?>" />
											<input type="submit" class="button-inscribir" value="Inscribirse" />
										</form>
									<?php } ?>
								</td>
							<?php } ?>
						</tr>	
				<?php } ?>
			</table>
		</div>
	</div>
<?php include("foot.php") ?>