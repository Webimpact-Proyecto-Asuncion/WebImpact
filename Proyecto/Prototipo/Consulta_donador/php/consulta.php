<?php

	require_once ("conexion.php");

	function consulta(){
	$conexion=conexion();

	$sql="CALL ImprimirDonador";

	$result=mysqli_query($conexion, $sql);

	return $result;

	}
?>