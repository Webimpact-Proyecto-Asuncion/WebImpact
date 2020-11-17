<?php
	
	require_once "conexion.php";
	$conexion=conexion();

		
?>

<table class="table table-bordered table-hover ">
<thead class="thead-dark">
	<tr >
							
		<th>Tipo</th>
		<th>Encargado</th>
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Edad</th>
		<th>Observaciones</th>
		<th>Fecha</th>
		<th>Modificar</th>
		<th>Eliminar</th>
	</tr>	
</thead>

<?php

	$sql="CALL ImprimirReporte";

	if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT R.NumeroReporte, T.Nombre as 'Tipo', E.NombreEmpleado as 'Encargado', P.NombrePaciente as 'Nombre', P.ApellidoPaterno as 'A Paterno', P.ApellidoMaterno as 'A Materno', R.Edad, R.Observaciones, R.Fecha FROM TipoReporte T, Reporte R, Empleado E, Paciente P WHERE E.NumeroEmpleado = R.NumeroEmpleado and P.NumeroPaciente = R.NumeroPaciente and T.id_TipoReporte = R.id_Tipo and R.Visibilidad = 1 and  P.NombrePaciente LIKE '%".$q."%'";

	}

	$result=mysqli_query($conexion, $sql);

	while($ver=mysqli_fetch_row($result)){

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

		<td>
			<button class="btn btn-warning"><span class="oi oi-pencil"></span>Modificar </button>
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