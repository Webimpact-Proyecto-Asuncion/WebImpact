<?php

	function conexion(){
		
		$servername="localhost";
        $username="root";
        $password="";
        $dbname="asuncion1";

		$conexion=mysqli_connect($servername,$username,$password,$dbname);
			return $conexion;
		}
?>