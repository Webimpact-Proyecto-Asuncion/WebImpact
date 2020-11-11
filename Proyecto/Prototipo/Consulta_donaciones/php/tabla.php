<?php

	require_once "conexion.php";
	$conexion=conexion();

?>
	<table class="table table-bordered table-hover ">
          <thead class="thead-dark">
            <tr >
              
              <th>Donador</th>
              <th>Descripcion</th>
              <th>Fecha</th>
              <th>Modificar</th>
              <th>Eliminar</th>
            </tr> 
          </thead>

 <?php

	$sql="CALL ImprimirDonaciones";


	if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT D.NumeroDonativo, DON.RazonSocial as 'NombreDonador',  D.Descripcion as 'Descripcion', D.Fecha as 'Fecha'  FROM Donativos D, Donador DON WHERE D.id_Donador=DON.id_Donador and D.Visibilidad = 1 and DON.RazonSocial LIKE '%".$q."%'";

	}

	

	$result=mysqli_query($conexion, $sql);

	while($ver=mysqli_fetch_row($result)){

		$datos=$ver[0]."||".
			 	$ver[1]."||".
				$ver[2]."||".
				$ver[3];



	?>

	
	<tr>

		<td><?php echo $ver[1] ?></td>
		<td><?php echo $ver[2] ?></td>
		<td><?php echo $ver[3] ?></td>
						
							
		<td>
			<button class="btn btn-warning" ><span class="oi oi-pencil"></span>Modificar </button>
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
	