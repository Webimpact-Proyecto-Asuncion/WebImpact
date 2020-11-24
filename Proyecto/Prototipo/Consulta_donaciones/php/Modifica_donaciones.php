<?php
	
	require_once('conexion.php');
	
	function querydonaciones($id){
        
		$conexion = conexion();
		
		$sql="CALL GetdonativosById(";
		$sql=$sql.$id;
		$sql=$sql.")";

		$result = mysqli_query($conexion, $sql);


		while($row=mysqli_fetch_assoc($result)){
            
            echo $row["Descripcion"].",".$row["Fecha"].",".$row["id_Donador"];
            //echo $row["NumeroDonativo"].",".$row["Descripcion"].",".$row["Fecha"].",".$row["id_Donador"];
            
		}
	}


	function modificarDonativos($Descripcion,$Fecha,$id_Donador){

		$conexion = conexion();
        
		//$sql="CALL UpdateDonador(".$id_donador.", '".$RazonSocial."', '".$RFC."', '".$Correo."', '".$Telefono."', '".$Fecha."')";

        $sql="CALL UpdateDonativos('".$Descripcion."', '".$Fecha."',".$id_donador.")";

        
        var_dump($sql);

		echo$result = mysqli_query($conexion, $sql);

		
	}



?>