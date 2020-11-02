<?
	
	function conexion(){

		$server="localhost";
		$user="root";
		$password="";
		$db="asuncion";

		$conexion=mysqli_connect($server, $user, $password, $db);

		return $conexion;
	}


?>