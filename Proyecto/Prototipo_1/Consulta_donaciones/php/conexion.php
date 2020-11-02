<?
	
	function conexion(){

		$server="localhost";
		$user="root";
		$password="";
		$db="historia";

		$conexion=mysqli_connect($server, $user, $password, $db);

		return $conexion;
	}


?>