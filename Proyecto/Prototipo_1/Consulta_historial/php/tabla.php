<?php

	require_once "conexion.php";
	$conexion=conexion();

	$sql="SELECT Empleado, Paciente, ApellidoPaterno, ApellidoMaterno, Diagnostico, Tratamiento, Fecha FROM HistorialClinico";

	$result=mysqli_query($conexion, $sql);

	while(){
		
	}

?>