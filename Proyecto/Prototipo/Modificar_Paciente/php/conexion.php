<?php

	function conexion(){
		
		$servername="localhost";
        $username="Matu";
        $password="Matu$2020";
        $dbname="asuncion1";

		$conexion=mysqli_connect($servername,$username,$password,$dbname);

			return $conexion;
	

		if(!$conexion)
        {
            die("Connection failed: " . mysqli_connect_error()); 
        }

		return $conexion;
		

	}


    function closeDb($mysql)
    {
        mysqli_close($mysql); 
    }
?>