<?php

	require_once ("conexion.php");

	function consulta($page){

	
	$conexion=conexion();

	$limit = 10;
	$start = ($page - 1) * $limit;

	$sql="CALL ImprimirDonaciones($limit, $start)";

	$result=mysqli_query($conexion, $sql);

	return $result;

	}
?>