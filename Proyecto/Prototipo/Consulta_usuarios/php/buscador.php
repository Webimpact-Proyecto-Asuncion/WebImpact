<?php

	require_once ("conexion.php");
	

	function buscar(){
		
		$conexion=conexion();
		if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT E.NumeroEmpleado, E.NombreEmpleado, E.Correo, ES.Descripcion FROM Empleado E, Especialidad ES     WHERE E.id_Especialidad=ES.id_Especialidad and E.Visibilidad = 1 and E.NombreEmpleado LIKE '%".$q."%'";


		}

		$result=mysqli_query($conexion, $sql);

		return $result;
	}


	

?>