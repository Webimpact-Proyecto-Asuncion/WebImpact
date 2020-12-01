<?php

	require_once ("conexion.php");
	

	function buscar(){
		
		$conexion=conexion();
		if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT P.NumeroPaciente, P.NombrePaciente, P.ApellidoPaterno,  P.ApellidoMaterno, P.Telefono, P.Diagnostico, P.Lesion, P.Ingreso FROM Paciente P WHERE P.Visibilidad = 1 and P.NombrePaciente LIKE '%".$q."%'";

		$result=mysqli_query($conexion, $sql);

		return $result;
	}

}


?>