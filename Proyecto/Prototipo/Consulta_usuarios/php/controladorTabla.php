<?php


	require_once ("buscador.php");
	require_once ("consulta.php");

	function tabla(){

		$tabla="";
		$datos="";
		$result = consulta();
		
		if(isset($_POST["consulta"])){
			$result = buscar();
		}

		while($ver=mysqli_fetch_row($result)){
			$datos=$ver[0]."||".
				 	$ver[1]."||".
					$ver[2]."||".
					$ver[3];

			$tabla.="<tr>";
			$tabla.="<td>".$ver[0]."</td>";
			$tabla.="<td>".$ver[1]."</td>";
			$tabla.="<td>".$ver[2]."</td>";
			$tabla.="<td>".$ver[3]."</td>";
			$tabla.="<td>
				<button class='btn btn-warning' id='".$ver[0]."' onclick='modifyById(this.id)'><span class='oi oi-pencil'></span>Modificar </button>
				</td>";
			$tabla.="<td>";
			$tabla.="<button class='btn btn-danger' onclick=preguntarSiNo(".$ver[0].")>";
			$tabla.="<span class='oi oi-trash'></span> Eliminar</button>";
			$tabla.="</td>";

			$tabla.="</tr>";
		}
	
	return $tabla;


	}
		


?>