<?php

	function conexion(){
		
		$servername="localhost";
        $username="Matu";
        $password="Matu$2020";
        $dbname="asuncion1";

		$conexion=mysqli_connect($servername,$username,$password,$dbname);

			return $conexion;
		}
?>