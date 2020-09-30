<?php

     function conectDB(){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "historialclinico";

        $conexion = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conexion) {

                die("No se pudo conectar con la base de datos");

            }
            
            return $conexion;
    }
    /////////////////////
    function closeDB($conexion){

        mysqli_close($conexion);

    }
    
    //////////////////////////
    function getHistorialClinico(){
        
    $conn = conectDB();
      
             
    $sql= 'SELECT * FROM historialclinico';
  
        
    $resultado = mysqli_query($conn, $sql);
      
        
    closeDB($conn);
        
    return $resultado;
        
    }

    
?>