<?php

	function conexion(){
		
		$servername="localhost";
        $username="root";
        $password="";
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