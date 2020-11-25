<?php
	
	require_once "conexion.php";
	$conexion=conexion();

?>

	<table class="table table-bordered table-hover ">
          <thead class="thead-dark">
            <tr >
              
              <th>Fecha</th>
              <th>Empleado</th>
              <th>Paciente</th>
              <th>Asistencias</th>
              <th>Justificar</th>

              
            </tr> 
          </thead>
<?php

	$sql="CALL ImprimeFaltasBypaciente($id_paciente)";

	$result=mysqli_query($conexion, $sql);

	while($ver=mysqli_fetch_row($result)){

		$datos=$ver[0]."||".
			 	$ver[1]."||".
				$ver[2]."||".
				$ver[3];



	?>

	
	<tr>


		<td><?php echo $ver[1] ?></td>
		<td><?php echo $ver[2] ?></td>
		<td><?php echo $ver[3] ?></td>
		
		<td>
			<button class="btn btn-primary" onclick="justificacion('<?php  echo $datos ?>')"><span class="oi oi-heart"></span> Justificar</button>
		</td>

	<?php

	}

		?>					

					
	</table>
</div>