<?php include("head.php") ?>

	<div class="calendario">
		<h1>Clases semanales</h1>
		<table class="calendar-table">
			<th>
				<td></td>
				<td>Lunes</td>
				<td>Martes</td>
				<td>Miércoles</td>
				<td>Jueves</td>
				<td>Viernes</td>
				<td>Sábado</td>
				<td>Domingo</td>
			</th>
			<?php for($i=7;$i<=22;$i++){ ?>
				<tr>
					<?php for($j=0;$j<=7;$j++){ ?>
						<td><?php echo "$i" . ":00 - " . ($i+1) .":00"?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					<?php } ?>
				</tr>	
			<?php } ?>
		</table>
	</div>
<?php include("foot.php") ?>