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
	echo "<th>Num Paciente</th>";
	echo "<th>Nombre Paciente</th>";
	echo "<th>Apellido Paterno</th>";
	echo "<th>Apellido Materno</th>";
	echo "<th>Telefono</th>";
	echo "<th>Diagnostico</th>";
	echo "<th>Lesion</th>";
	echo "<th>Ingreso</th>";
	echo "<th>Modificar</th>";
	echo "<th>Eliminar</th>";
	echo "</tr";
	echo "</thead>";

	while($ver=mysqli_fetch_row($result)){
		$datos=$ver[0]."||".
		 	$ver[1]."||".
			$ver[2]."||".
			$ver[3]."||".
			$ver[4]."||".
			$ver[5]."||".
			$ver[6]."||".
			$ver[7];
		
		echo "<tr>";
		echo "<td>".$ver[0]."</td>";
		echo "<td>".$ver[1]."</td>";
		echo "<td>".$ver[2]."</td>";
		echo "<td>".$ver[3]."</td>";
		echo "<td>".$ver[4]."</td>";
		echo "<td>".$ver[5]."</td>";
		echo "<td>".$ver[6]."</td>";
		echo "<td>".$ver[7]."</td>";

		echo "<td>
				<button class='btn btn-warning' onclick=Actualiza('".$datos."')><span class='oi oi-pencil'></span>Modificar </button>
				</td>";
		echo "<td>";
		echo "<button class='btn btn-danger' onclick=preguntarSiNo(".$ver[0].")>";
		echo "<span class='oi oi-trash'></span> Eliminar</button>";
		echo "</td>";

		echo "</tr>";
		}

	echo "</table>";



	/*			<td>
					<button class="btn btn-warning" onclick="Actualiza('<?php  echo $datos ?>')"><span class="oi oi-pencil"></span>Modificar </button>
				</td>
							
				<td>
					<button class="btn btn-danger" onclick="preguntarSiNo('<?php  echo $ver[0] ?>')"><span class="oi oi-trash"></span> Eliminar</button>
	*/
?>
	
							
							
				
	