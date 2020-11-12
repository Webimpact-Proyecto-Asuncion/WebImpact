<?php
	
	require_once "conexion.php";
	$conexion=conexion();
		
?>


	<table class="table table-bordered table-hover ">
		<thead class="thead-dark">
			<tr >
							
				<th>Num Paciente</th>
				<th>Nombre Paciente</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Telefono</th>
				<th>Diagnostico</th>
				<th>Faltas</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</tr>	
		</thead>

		<?php

			$sql="CALL ImprimirPacientes";

			if(isset($_POST["consulta"])){

			$q = $conexion->real_escape_string($_POST['consulta']);
			$sql = "SELECT P.NumeroPaciente, P.NombrePaciente, P.ApellidoPaterno,  P.ApellidoMaterno, P.Telefono, P.Diagnostico, SUM(PC.Asistencia) FROM Paciente P, Paciente_Consulta PC 
				WHERE P.NumeroPaciente = PC.NumeroPaciente and P.Visibilidad = 1 and P.NombrePaciente LIKE '%".$q."%'";

			}

			$result=mysqli_query($conexion, $sql);

			while($ver=mysqli_fetch_row($result)){
				$datos=$ver[0]."||".
					 	$ver[1]."||".
						$ver[2]."||".
						$ver[3]."||".
						$ver[4]."||".
						$ver[5]."||".
						$ver[6];
		?>
				<tr>

				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
							
							
							
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
	