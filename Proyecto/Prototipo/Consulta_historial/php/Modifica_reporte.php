<?php
	
	require_once ('conexion.php');

	function queryreporte($id){
		$conexion = conexion();

		$sql="CALL GetreporteById(";
		$sql=$sql.$id;
		$sql=$sql.")";
		

		$result = mysqli_query($conexion, $sql);

		while($row=mysqli_fetch_assoc($result)){
			echo $row["NumeroReporte"].",".$row["NumeroEmpleado"].",".$row["NumeroPaciente"].",".$row["Edad"].",".$row["Valoracion"].",".$row["Terapia"].",".$row["Tratamiento"].",".$row["Avances"].",".$row["Fecha"];
		}
	}

	function modificaReporte($NumReporte, $NumEmpleado, $NumPaciente, $Edad, $Valoracion, $Terapia, $Tratamiento, $Avances, $Fecha){

		$conexion = conexion();
		echo "si llego aqui";
		$sql="CALL UpdateReporte (".$NumReporte.",".$NumEmpleado.",".$NumPaciente.",".$Edad.",'".$Valoracion."','".$Terapia."','".$Tratamiento."','".$Avances."','".$Fecha."')";

		echo $result = mysqli_query($conexion, $sql);
	}


?>