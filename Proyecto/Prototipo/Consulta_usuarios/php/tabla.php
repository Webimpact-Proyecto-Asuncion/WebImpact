<?php
	
	require_once ("consulta.php");
	require_once ("buscador.php");
	


	$result = consulta();
	
	if(isset($_POST["consulta"])){
		$result = buscar();
	}

	

	echo "<table class='table table-bordered table-hover'>";
	echo "<thead class='thead-dark'>";
	echo "<tr>";
	echo "<th>Num Empleado</th>";
	echo "<th>Nombre Empleado</th>";
	echo "<th>Correo</th>";
	echo "<th>Especialidad</th>";
	echo "<th>Modificar</th>";
	echo "<th>Eliminar</th>";
	echo "</tr";
	echo "</thead>";

	while($ver=mysqli_fetch_row($result)){
			$datos=$ver[0]."||".
				 	$ver[1]."||".
					$ver[2]."||".
					$ver[3];

		echo "<tr>";
		echo "<td>".$ver[0]."</td>";
		echo "<td>".$ver[1]."</td>";
		echo "<td>".$ver[2]."</td>";
		echo "<td>".$ver[3]."</td>";
		

		echo "<td>
				<button class='btn btn-warning' id=".$ver[0]." onClick'modifyById(this.id)'><span class='oi oi-pencil'></span>Modificar </button>
				</td>";
		echo "<td>";
		echo "<button class='btn btn-danger' onclick=preguntarSiNo(".$ver[0].")>";
		echo "<span class='oi oi-trash'></span> Eliminar</button>";
		echo "</td>";

		echo "</tr>";
	}

	echo "</table>";
						
/*							
	<td>
		<button class="btn btn-warning modificar" id="<?php echo $ver[0] ?>" onClick="modifyById(this.id)"><span class="oi oi-pencil"></span>Modificar </button>
	</td>
							
	<td>
		<button class="btn btn-danger" onclick="preguntarSiNo('<?php  echo $ver[0] ?>')"><span class="oi oi-trash"></span> Eliminar</button>
	</td>

	</tr>
*/
?>
	