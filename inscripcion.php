<?php include("head.php") ?>
	<div class="contenedor">
		<div class="calendario">
			<h1>Clases semanales</h1>
			<table class="calendar-table">
				<tr>
					<td></td>
					<td>Lunes</td>
					<td>Martes</td>
					<td>Miércoles</td>
					<td>Jueves</td>
					<td>Viernes</td>
					<td>Sábado</td>
					<td>Domingo</td>
				</tr>
				<?php for($i=7;$i<=22;$i++){ ?>
					<?php if($i%2==0){ ?>
						<tr class="tr2">
					<?php }else{ ?>
						<tr class="tr1">
					<?php } ?>
							<td><?php echo "$i" . ":00 - " . ($i+1) .":00" ;?></td>
							<?php for($j=1;$j<=7;$j++){ ?>
								<td><?php echo ("$i and $j"); ?></td>
							<?php } ?>
						</tr>	
				<?php } ?>
			</table>
		</div>
	</div>
<?php include("foot.php") ?>