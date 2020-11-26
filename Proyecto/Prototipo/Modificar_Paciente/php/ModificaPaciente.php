<?php
	
	require_once ('conexion.php');

	function querypaciente($id){
		$conexion = conexion();

		$sql="CALL GetpacienteById($id)";
		

		$result = mysqli_query($conexion, $sql);

		while($row=mysqli_fetch_assoc($result)){
			echo $row["NumeroPaciente"].",".$row["NombrePaciente"].",".$row["ApellidoPaterno"].",".$row["ApellidoMaterno"].",".$row["Domicilio"].",".$row["Estado"].",".$row["Municipio"].",".$row["Telefono"].",".$row["Correo"].",".$row["FechaNacimiento"].",".$row["Genero"].",".$row["Diagnostico"].",".$row["Lesion"].",".$row["Ingreso"].",".$row["Reingreso"].",".$row["Egreso"].",".$row["Dependencia"];
		}
	}

	function modificaPaciente($id_paciente, $nombre, $apellidoP, $apellidoM, $domicilio, $estado, $municipio, $tel, $correo, $nacimiento, $genero, $lesion, $ingreso, $reingreso, $egreso, $dependencia, $estudioSE, $curp, $acta, $comprobante, $expediente, $recomendacion){


		echo "llego aqui";

		$conexion = conexion();
		
		$sql="CALL UpdatePaciente ($id_paciente,$nombre, $apellidoP, $apellidoM, $domicilio, $estado, $municipio, $tel, $correo, $nacimiento, $genero, $lesion, $ingreso, $reingreso, $egreso, $dependencia);"; //$estudioSE, $curp, $acta, $comprobante, $expediente, $recomendacion 

		echo $result = mysqli_query($conexion, $sql);
	}


?>