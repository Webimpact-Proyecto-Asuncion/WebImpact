<?php

<<<<<<< HEAD
     function conectDB(){
        
        $servername = "localhost";
        $username = "WITEAM";
        $password = "WebImpact$2020";
        $dbname = "asuncion";

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
      
             
    $sql= 'SELECT * FROM HistorialClinico';
  
        
    $resultado = mysqli_query($conn, $sql);
      
        
    closeDB($conn);
        
    return $resultado;
        
    }

    
