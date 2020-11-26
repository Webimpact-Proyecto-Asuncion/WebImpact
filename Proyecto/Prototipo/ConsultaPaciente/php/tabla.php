<?php
	
	require_once "conexion.php";
	$conexion=conexion();
	$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 1;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;

	$result1 = $conexion->query("SELECT count(NumeroPaciente) AS id FROM Paciente WHERE Visibilidad = 1");
	$Count = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $Count[0]['id'];
	$pages = ceil( $total / $limit );

	$Previous = $page - 1;
	$Next = $page + 1;
?>
	<div class="row">
		<div class="col-md-10">
			<nav aria-label="Page navigation">
				<ul class="pagination">
				<li class="page-item">
					<a class="page-link" href="index.php?page=<?= $Previous; ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo; Previous</span>
					</a>
				</li>
				<?php for($i = 1; $i<= $pages; $i++) : ?>
					<li class="page-item" ><a class="page-link" href="index.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				<?php endfor; ?>
				<li class="page-item">
					<a class="page-link" href="index.php?page=<?= $Next; ?>" aria-label="Next">
					<span aria-hidden="true">Next &raquo;</span>
					</a>
				</li>
				</ul>
			</nav>
		</div>
		<div class="text-center" style="margin-top: 20px; " class="col-md-2">
			<form method="post" action="#">
					<select name="limit-records" id="limit-records">
						<option disabled="disabled" selected="selected">---Limite por pagina---</option>
						<?php foreach([5,25,50,100] as $limit): ?>
							<option <?php if( isset($_POST["limit-records"]) && $_POST["limit-records"] == $limit) echo "selected" ?> value="<?= $limit; ?>"><?= $limit; ?></option>
						<?php endforeach; ?>
					</select>
				</form>
			</div>
	</div>
	<table class="table table-bordered table-hover ">
		<thead class="thead-dark">
			<tr >
							
				<th>Num Paciente</th>
				<th>Nombre Paciente</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Telefono</th>
				<th>Diagnostico</th>
				<th>Lesion</th>
				<th>Ingreso</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</tr>	
		</thead>

		<?php

			$sql="CALL ImprimirPacientes($start, $limit)";

			if(isset($_POST["consulta"])){

			$q = $conexion->real_escape_string($_POST['consulta']);
			$sql = "SELECT P.NumeroPaciente, P.NombrePaciente, P.ApellidoPaterno,  P.ApellidoMaterno, P.Telefono, P.Diagnostico, P.Lesion, P.Ingreso FROM Paciente P WHERE P.Visibilidad = 1 and P.NombrePaciente LIKE '%".$q."%'";

			}

			$result=mysqli_query($conexion, $sql);

			while($ver=mysqli_fetch_row($result)){
				$datos=$ver[0]."||".
					 	$ver[1]."||".
						$ver[2]."||".
						$ver[3]."||".
						$ver[4]."||".
						$ver[5]."||".
						$ver[6]."||".
						$ver[7];
		?>
				<tr>

				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
							
							
							
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
	