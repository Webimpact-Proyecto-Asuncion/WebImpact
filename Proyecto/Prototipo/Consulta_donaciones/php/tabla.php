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
	echo "<th>Donador</th>";
	echo "<th>Descripcion</th>";
	echo "<th>Fecha</th>";
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
		echo "<td>".$ver[1]."</td>";
		echo "<td>".$ver[2]."</td>";
		echo "<td>".$ver[3]."</td>";


		echo "<td>
				<button class='btn btn-warning' onclick=Actualiza('".$ver[0]."')>";
		echo "<span class='oi oi-pencil'></span>Modificar </button>";
		echo "</td>";

		echo "<td>";
		echo "<button class='btn btn-danger' onclick=preguntarSiNo(".$ver[0].")>";
		echo "<span class='oi oi-trash'></span> Eliminar</button>";
		echo "</td>";

		echo "</tr>";

		
		
	}

	echo "</table>";


	/*
		<td>
			<button class="btn btn-warning" onclick="Actualiza('<?php  echo $datos ?>') "><span class="oi oi-pencil"></span>Modificar </button>
		</td>

		*/
?>


	
						
