<?php

	require_once ("conexion.php");
	

	function buscar(){
		
		$conexion=conexion();
		if(isset($_POST["consulta"])){

		$q = $conexion->real_escape_string($_POST['consulta']);
		$sql = "SELECT D.NumeroDonativo, DON.RazonSocial as 'NombreDonador',  D.Descripcion as 'Descripcion', D.Fecha as 'Fecha'  FROM Donativos D, Donador DON WHERE D.id_Donador=DON.id_Donador and D.Visibilidad = 1 and DON.RazonSocial LIKE '%".$q."%'";

		$result=mysqli_query($conexion, $sql);

		return $result;
	}

}


?>