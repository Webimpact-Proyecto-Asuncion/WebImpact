<?php
	
	require_once('conexion.php');
	
	function querydonador($id){
		$conexion = conexion();
		
		$sql="CALL GetdonadorById(";
		$sql=$sql.$id;
		$sql=$sql.")";

		$result = mysqli_query($conexion, $sql);


		while($row=mysqli_fetch_assoc($result)){
			echo $row["id_Donador"].",".$row["RazonSocial"].",".$row["RFC"].",".$row["Correo"].",".$row["Telefono"].",".$row["Nacimiento"];
		}
	}

	function modificaDonador($id_donador, $RazonSocial, $RFC, $Correo, $Telefono, $fecha){

		$conexion = conexion();
		$sql="CALL UpdateDonador($id_donador, $RazonSocial, $RFC, $Correo, $Telefono, $fecha)";
		$result = mysqli_query($conexion, $sql);
		

	}



?>