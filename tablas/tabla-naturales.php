

<?php include("../db.php"); ?>

<?php include("../componentes/encabezado.php"); ?>

 
	 <a href="../registro-natural.php">Regresar </a>



<div class="col-md-8">

	<table class="table table-bordered">
		
		<thead>
			
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>DNI</th>
				<th>Correo</th>
				<th>Dirección</th>
				<th>Teléfono</th>	
			</tr>

		</thead>
		<tbody>
			
			<?php 
				$query = "SELECT * FROM persona_natural";
				$result_natural = mysqli_query($conn, $query);

				while($row = mysqli_fetch_array($result_natural)) { ?>
					
				<tr>
					<td><?php echo $row['nombre'] ?></td>
					<td><?php echo $row['apellido'] ?></td>
					<td><?php echo $row['dni'] ?></td>
					<td><?php echo $row['correo'] ?></td>
					<td><?php echo $row['direccion'] ?></td>
					<td><?php echo $row['telefono'] ?></td>
				</tr>	

			<?php } ?>

		</tbody>
	</table>


</div>



<?php  include("../componentes/final.php"); ?>