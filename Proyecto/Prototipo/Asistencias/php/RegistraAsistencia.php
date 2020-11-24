<?php
	require_once "conexion.php";
	$conexion=conexion();

	


	if (isset($_POST["idempleado"]) && isset($_POST["idpaciente"])) {
		$idpaciente=$_POST["idpaciente"];
		$id_empleado=$_POST["idempleado"];


		
		$sql="CALL RegistraAsistencia($id_empleado, $idpaciente)";
		$result=mysqli_query($conexion, $sql);
		echo $result;

		echo $idpaciente;
		echo $id_empleado;
	}

	
	


?>