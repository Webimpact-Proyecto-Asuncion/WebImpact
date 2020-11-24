<?php
	
	require_once "conexion.php";
	$conexion=conexion();

		
?>

<table class="table table-bordered table-hover ">
<thead class="thead-dark">
	<tr >
							
		<th>Encargado</th>
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Valoracion</th>
		<th>Terapia</th>
		<th>Tratamiento</th>
		<th>Avances</th>
		<th>Fecha</th>
		<th>Modificar</th>
		<th>Eliminar</th>
	</tr>	
</thead>

<?php

	$sql="CALL ImprimirReporte";

	if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT  R.NumeroReporte, E.NombreEmpleado as 'Encargado', P.NombrePaciente as 'Nombre', P.ApellidoPaterno as 'A Paterno', P.ApellidoMaterno as 'A Materno', R.Valoracion, R.Terapia, R.Tratamiento, R.Avances, R.Fecha
			FROM Reporte R, Empleado E, Paciente P
			WHERE E.NumeroEmpleado = R.NumeroEmpleado and P.NumeroPaciente = R.NumeroPaciente and R.Visibilidad = 1 and P.NombrePaciente LIKE '%".$q."%'";

	}

	$result=mysqli_query($conexion, $sql);

	while($ver=mysqli_fetch_row($result)){
		$datos=$ver[0]."||".
			 	$ver[1]."||".
				$ver[2]."||".
				$ver[3]."||".
				$ver[4]."||".
				$ver[5]."||".
				$ver[6]."||".
				$ver[7]."||".
				$ver[8]."||".
				$ver[9];
				
?>
		<tr>


		<td><?php echo $ver[1] ?></td>
		<td><?php echo $ver[2] ?></td>
		<td><?php echo $ver[3] ?></td>
		<td><?php echo $ver[4] ?></td>
		<td><?php echo $ver[5] ?></td>
		<td><?php echo $ver[6] ?></td>
		<td><?php echo $ver[7] ?></td>
		<td><?php echo $ver[8] ?></td>
		<td><?php echo $ver[9] ?></td>
		
		

		<td>
			<button class="btn btn-warning"><span class="oi oi-pencil" onclick="Actualiza('<?php echo $datos ?>')"></span>Modificar </button>
		</td>
							
		<td>
			<button class="btn btn-danger" onclick="preguntarSiNo('<?php  echo $ver[0] ?>')"><span class="oi oi-trash"></span> Eliminar</button>
		</td>

		</tr>

		<?php

		}

		?>					

					
	</table>
</div>