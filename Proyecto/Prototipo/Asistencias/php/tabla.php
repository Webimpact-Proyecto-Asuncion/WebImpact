<?php

	require_once "conexion.php";
	$conexion=conexion();

?>
	<table class="table table-bordered table-hover ">
          <thead class="thead-dark">
            <tr >
              
              <th>Nombre Paciente</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Faltas</th>
              <th>Total</th>
              <th>Asistencia</th>
              <th>Falta</th>

              
            </tr> 
          </thead>

 <?php

	$sql="CALL ImprimirAsistencias";


	if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT P.NumeroPaciente, P.NombrePaciente, P.ApellidoPaterno, P.ApellidoMaterno, SUM(PC.Asistencia) as 'Faltas', COUNT(PC.Asistencia) as 'Total' FROM Paciente_Consulta PC, Paciente P WHERE P.NumeroPaciente = PC.NumeroPaciente AND P.Visibilidad = 1 AND P.NombrePaciente LIKE '%".$q."%' GROUP BY P.NumeroPaciente ";

	}

	

	$result=mysqli_query($conexion, $sql);

	while($ver=mysqli_fetch_row($result)){

		$datos=$ver[0]."||".
			 	$ver[1]."||".
				$ver[2]."||".
				$ver[3]."||".
				$ver[4]."||".
				$ver[5];



	?>

	
	<tr>

		
		<td><?php echo $ver[2] ?></td>
		<td><?php echo $ver[3] ?></td>
		<td><?php echo $ver[4] ?></td>
		<td><?php echo $ver[5] ?></td>
		
		
		<td>
			<button class="btn btn-success" onclick="confirmaAsistencia('<?php  echo $datos ?>')"><span class="oi oi-check"></span> Asistencia</button>
		</td>
				
		<td>
			<button class="btn btn-danger" onclick="preguntarSiNo('<?php  echo $datos ?>')"><span class="oi oi-x"></span> Falta</button>
		</td>

		</tr>

		<?php

		}

		?>					

					
	</table>
</div>
	