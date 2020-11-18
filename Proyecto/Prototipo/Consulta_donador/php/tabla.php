<?php

	require_once "conexion.php";
	$conexion=conexion();

?>
	<table class="table table-bordered table-hover ">
          <thead class="thead-dark">
            <tr >
              
              <th>Id_Donador</th>
              <th>Razon Social</th>
              <th>RFC</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>Modificar</th>
              <th>Eliminar</th>
            </tr> 
          </thead>

 <?php

	$sql="CALL ImprimirDonador";


	if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT D.id_Donador, D.RazonSocial, D.RFC, D.Correo, D.Telefono FROM donador D WHERE D.Visibilidad=1 and D.RazonSocial LIKE '%".$q."%'";

	}

	

	$result=mysqli_query($conexion, $sql);

	while($ver=mysqli_fetch_row($result)){

		$datos=$ver[0]."||".
			 	$ver[1]."||".
				$ver[2]."||".
				$ver[3]."||".
				$ver[4];



	?>

	
	<tr>

		<td><?php echo $ver[0] ?></td>
		<td><?php echo $ver[1] ?></td>
		<td><?php echo $ver[2] ?></td>
		<td><?php echo $ver[3] ?></td>
		<td><?php echo $ver[4] ?></td>
						
							
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
	