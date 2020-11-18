<?php
	
	require_once ("conexion.php");
	$conexion=conexion();
		
?>

<table class="table table-bordered table-hover ">
	<thead class="thead-dark">
		<tr >
							
			<th>Num Empleado</th>
			<th>Nombre Empleado</th>
			<th>Correo</th>
			<th>Especialidad</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</tr>	
	</thead>

	<?php

		$sql="CALL ImprimirEmpleados";

		if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT E.NumeroEmpleado, E.NombreEmpleado, E.Correo, ES.Descripcion FROM Empleado E, Especialidad ES     WHERE E.id_Especialidad=ES.id_Especialidad and E.Visibilidad = 1 and E.NombreEmpleado LIKE '%".$q."%'";

	}

		$result=mysqli_query($conexion, $sql);

		while($ver=mysqli_fetch_row($result)){
			$datos=$ver[0]."||".
				 	$ver[1]."||".
					$ver[2]."||".
					$ver[3];
	?>
			<tr>

			<td><?php echo $ver[0] ?></td>
			<td><?php echo $ver[1] ?></td>
			<td><?php echo $ver[2] ?></td>
			<td><?php echo $ver[3] ?></td>
							
							
<<<<<<< HEAD
							<td>
							<button class="btn btn-warning modificar" id="<?php echo $ver[0] ?>" onClick="modifyById(this.id)"><span class="oi oi-pencil"></span>Modificar </button>
							</td>
=======
			<td>
				<button class="btn btn-warning"><span class="oi oi-pencil"></span>Modificar </button>
			</td>
>>>>>>> Filtro_consultas
							
			<td>
				<button class="btn btn-danger" onclick="preguntarSiNo('<?php  echo $ver[0] ?>')"><span class="oi oi-trash"></span> Eliminar</button>
			</td>

			</tr>

			<?php

			}

			?>					

					
	</table>
</div>
	