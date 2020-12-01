<?php

	require_once ("buscador.php");
	require_once ("consulta.php");
	
	$result = consulta();
	
	if(isset($_POST["consulta"])){
		$result = buscar();
	}

	echo "<table class='table table-bordered table-hover'>";
	echo "<thead class='thead-dark'>";
	echo "<tr>";
	echo "<th>Nombre Paciente</th>";
	echo "<th>ApellidoPaterno</th>";
	echo "<th>ApellidoMaterno</th>";
	echo "<th>Faltas</th>";
	echo "<th>Total</th>";
	echo "<th>Asistencias</th>";
	echo "<th>Falta</th>";
	echo "<th>Justificar</th>";
	echo "</tr";
	echo "</thead>";	


	while($ver=mysqli_fetch_row($result)){

		$datos=$ver[0]."||".
			 	$ver[1]."||".
				$ver[2]."||".
				$ver[3]."||".
				$ver[4]."||".
				$ver[5];

		echo "<tr>";
		echo "<td>".$ver[1]."</td>";
		echo "<td>".$ver[2]."</td>";
		echo "<td>".$ver[3]."</td>";
		echo "<td>".$ver[4]."</td>";
		echo "<td>".$ver[5]."</td>";

		echo "<td>
				<button class='btn btn-success' onclick=confirmaAsistencia('".$datos."')>";
		echo "<span class='oi oi-check'></span>Asistencia </button>";
		echo "</td>";

		echo "<td>;
				<button class='btn btn-danger' onclick=preguntarSiNo('".$datos."')>";
		echo "<span class='oi oi-x'></span>Falta </button>";
		echo "</td>";

		echo "<td>
				<button class='btn btn-primary' onclick=preguntarJustificacion('".$datos."')>";
		echo "<span class='oi oi-heart'></span>Justificar </button>";
		echo "</td>";

		echo "</tr>";

		
		
	}

	echo "</table>";


?>


	
		<td>
			<button class="btn btn-success" onclick="confirmaAsistencia('<?php  echo $datos ?>')"><span class="oi oi-check"></span> Asistencia</button>
		</td>
				
		<td>
			<button class="btn btn-danger" onclick="preguntarSiNo('<?php  echo $datos ?>')"><span class="oi oi-x"></span> Falta</button>
		</td>
		<td>
			<button class="btn btn-primary" onclick="preguntarJustificacion('<?php  echo $datos ?>')"><span class="oi oi-pencil"></span> Justificar</button>
		</td>

		</tr>

		<?php

		}

		?>					

					
	</table>
</div>
	