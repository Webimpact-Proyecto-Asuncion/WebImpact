<?php

	function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="asuncion1";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}
?>