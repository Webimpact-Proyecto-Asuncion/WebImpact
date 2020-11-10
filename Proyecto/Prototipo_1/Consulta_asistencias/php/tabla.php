<?php

	require_once "conexion.php";
	$conexion=conexion();
?>
<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="compara" role="tabpanel" aria-labelledy="compara-tab">
			<div class="table-responsive container" id="tabla">
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

						$result=mysqli_query($conexion, $sql);

						while($ver=mysqli_fetch_row($result)){

					?>
							<tr>

							<td><?php echo $ver[0] ?></td>
							<td><?php echo $ver[1] ?></td>
							<td><?php echo $ver[2] ?></td>
						
							
							<td>
								<button class="btn btn-warning"><span class="oi oi-pencil"></span>Modificar </button>
							</td>
							
							<td>
								<button class="btn btn-danger"><span class="oi oi-trash"></span> Eliminar</button>
							</td>

							</tr>

							<?php

							}

							?>					

					
				</table>
			</div>
		</div>
	</div>