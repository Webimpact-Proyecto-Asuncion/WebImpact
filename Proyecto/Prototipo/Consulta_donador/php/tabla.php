<?php

	require_once ("buscador.php");
	require_once ("consulta.php");


	function tabla ($page){
		$tabla="";
		$datos="";
		$result = consulta($page);

		
		while($ver=mysqli_fetch_row($result)){
		$datos=$ver[0]."||'".
			 	$ver[1]."'||".
				$ver[2]."||".
				$ver[3]."||".
				$ver[4]."||".
				$ver[5];

		$tabla.="<tr>";
		$tabla.="<td>".$ver[0]."</td>";
		$tabla.="<td>".$ver[1]."</td>";
		$tabla.="<td>".$ver[2]."</td>";
		$tabla.="<td>".$ver[3]."</td>";
		$tabla.="<td>".$ver[4]."</td>";
		$tabla.="<td>".$ver[5]."</td>";

		$tabla.="<td>
				<button class='btn btn-warning' onclick=Actualiza(".$ver[0].")>";
		$tabla.="<span class='oi oi-pencil'></span>Modificar </button>";
		$tabla.="</td>";

		$tabla.="<td>";
		$tabla.="<button class='btn btn-danger' onclick=preguntarSiNo(".$ver[0].")>";
		$tabla.="<span class='oi oi-trash'></span> Eliminar</button>";
		$tabla.="</td>";

		$tabla.="</tr>";

		
		
		}
	return $tabla;	

	}

	function tabla1 ($page, $consulta){
		$tabla="";
		$datos="";
		$result = buscar($consulta);
		
		
		while($ver=mysqli_fetch_row($result)){
		$datos=$ver[0]."||'".
			 	$ver[1]."'||".
				$ver[2]."||".
				$ver[3]."||".
				$ver[4]."||".
				$ver[5];

		$tabla.="<tr>";
		$tabla.="<td>".$ver[0]."</td>";
		$tabla.="<td>".$ver[1]."</td>";
		$tabla.="<td>".$ver[2]."</td>";
		$tabla.="<td>".$ver[3]."</td>";
		$tabla.="<td>".$ver[4]."</td>";
		$tabla.="<td>".$ver[5]."</td>";

		$tabla.="<td>
				<button class='btn btn-warning' onclick=Actualiza(".$ver[0].")>";
		$tabla.="<span class='oi oi-pencil'></span>Modificar </button>";
		$tabla.="</td>";

		$tabla.="<td>";
		$tabla.="<button class='btn btn-danger' onclick=preguntarSiNo(".$ver[0].")>";
		$tabla.="<span class='oi oi-trash'></span> Eliminar</button>";
		$tabla.="</td>";

		$tabla.="</tr>";

		
		
		}
	return $tabla;	

	}
	
?>