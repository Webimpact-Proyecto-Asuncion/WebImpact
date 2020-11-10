<?php

	function conexion(){
		$servername="localhost";
        $username="WITEAM";
        $password="WebImpact$2020";
        $dbname="asuncion1";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}
?>