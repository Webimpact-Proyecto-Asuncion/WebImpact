<?php

	require_once ("conexion.php");
	

	function buscar(){
		
		$conexion=conexion();
		if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT  R.NumeroReporte, E.NombreEmpleado as 'Encargado', P.NombrePaciente as 'Nombre', P.ApellidoPaterno as 'A Paterno', P.ApellidoMaterno as 'A Materno', R.Valoracion, R.Terapia, R.Tratamiento, R.Avances, R.Fecha
			FROM Reporte R, Empleado E, Paciente P
			WHERE E.NumeroEmpleado = R.NumeroEmpleado and P.NumeroPaciente = R.NumeroPaciente and R.Visibilidad = 1 and P.NombrePaciente LIKE '%".$q."%'";

		$result=mysqli_query($conexion, $sql);

		return $result;
	}

}


?>