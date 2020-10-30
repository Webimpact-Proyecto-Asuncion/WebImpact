
<?php 
	session_start();
	require_once "../php/util.php";
	$conexion=conexion();

 ?>
 
 <!-- rejilla de bootstrap, es como si fuera una nueva tupla-->
<div class="row">
    <!--  -->
	    <!-- crear la tabla (Table-hover) sirve para sombrear las tuplas (table-condensed) es para que se vea comprimido -->
	    <!-- (table-bordered) es para que se vean en celdas-->
		<table class="table  table-condensed table-bordered">
		<!--  -->
		<!-- caption sirve para darle un título descriptivo a las tablas. -->
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<!-- Sirve para contener lineas simples de texto  -->
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			
				<td>Nombre Paciente</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Diagnostico</td>
				<td>Tratamiento</td>
				<td>Fecha</td>
				<td>Editar</td>
				<td>Eliminar</td>
			

			<?php 

			$query = "SELECT NombrePaciente, ApellidoPaterno, ApellidoMaterno, Diagnostico, Tratamiento, fecha FROM historialclinico WHERE NombrePaciente NOT LIKE '' ORDER By NumeroEmpleado LIMIT 5";
			
			 if (isset($_POST['consulta'])) {
		        $q = $conn->real_escape_string($_POST['consulta']);
		        $query = "SELECT * FROM historialclinico WHERE NombrePaciente LIKE '%$q%'";
		     }
		     

		    $result=mysqli_query($conexion,$query);
            
                /*Empieza el while*/
            
			while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5];

						   
			 ?>

			<tr><!--Muestra los datos en la tabla  -->
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				
				
				

				<td>
				
				    <!-- Boton para editar (glyphicon glyphicon-pencil) es la imagen -->    
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
				    <!--Boton para borrar (glyphicon glyphicon-remove) es la imagen -->
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			
			<!-- Se cierra el while -->
			<?php 
		}
			 ?>
		</table>
	</div>
</div>