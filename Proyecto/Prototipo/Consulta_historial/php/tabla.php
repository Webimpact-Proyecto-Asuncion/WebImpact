<?php
	
	require_once ("buscador.php");
	require_once ("consulta.php");
	$datos="";
	$result = consulta();
	
	if(isset($_POST["consulta"])){
		$result = buscar();
	}
		
	echo "<table class='table table-bordered table-hover'>";
	echo "<thead class='thead-dark'>";
	echo "<tr>";
	echo "<th>Colaborador</th>";
	echo "<th>Nombre</th>";
	echo "<th>Apellido Paterno</th>";
	echo "<th>Apellido Materno</th>";
	echo "<th>Valoracion</th>";
	echo "<th>Terapia</th>";
	echo "<th>Tratamiento</th>";
	echo "<th>Avances</th>";
	echo "<th>Fecha</th>";
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
				$ver[7]."||".
				$ver[8]."||".
				$ver[9];

		echo "<tr>";
		echo "<td>".$ver[1]."</td>";
		echo "<td>".$ver[2]."</td>";
		echo "<td>".$ver[3]."</td>";
		echo "<td>".$ver[4]."</td>";
		echo "<td>".$ver[5]."</td>";
		echo "<td>".$ver[6]."</td>";
		echo "<td>".$ver[7]."</td>";
		echo "<td>".$ver[8]."</td>";
		echo "<td>".$ver[9]."</td>";


		echo "<td>
				<button class='btn btn-warning' onclick=Actualiza('".$datos."')>";
		echo "<span class='oi oi-pencil'></span>Modificar </button>";
		echo "</td>";

		echo "<td>";
		echo "<button class='btn btn-danger' onclick=preguntarSiNo(".$ver[0].")>";
		echo "<span class='oi oi-trash'></span> Eliminar</button>";
		echo "</td>";

		echo "</tr>";

		

	}

	echo "</table>";

?>

