<?php

	require_once ("conexion.php");
	

	function buscar(){
		
		$conexion=conexion();
		if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT D.id_Donador, D.RazonSocial, D.RFC, D.Correo, D.Telefono, D.Nacimiento FROM donador D WHERE D.Visibilidad=1 and D.RazonSocial LIKE '%".$q."%'";

		$result=mysqli_query($conexion, $sql);

		return $result;
	}

}


?>