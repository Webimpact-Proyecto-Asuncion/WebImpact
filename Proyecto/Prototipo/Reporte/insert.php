<?php

    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="asuncion1";

    $conn=mysqli_connect($servername,$username,$dbpassword,$dbname);

    if(!$conn){
        
        die("Could not connect:".mysqli_connect_error());
    }
    else{
    
        $NumeroPaciente =test_input($_POST['NumeroPaciente']);
        $Edad =test_input($_POST['Edad']);
        $Valoracion =test_input($_POST['Valoracion']);
        $Terapia =test_input($_POST['Terapia']); 
        $Tratamiento =test_input($_POST['Tratamiento']);
        $Avances =test_input($_POST['Avances']);
        
        //$sql="INSERT INTO semestrales(NumeroPaciente,Edad,Valoracion,Terapia,Tratamiento,Avances) VALUES('$NumeroPaciente','$Edad','$Valoracion','$Terapia','$Tratamiento','$Avances')";
        
        $sql="CALL CrearReporte ('$NumeroPaciente','$Edad','$Valoracion','$Terapia','$Tratamiento','$Avances')";
        
        if ( (empty($_POST["NumeroPaciente"]) || empty($_POST["Edad"]) || empty($_POST["Valoracion"]) ||empty($_POST["Terapia"]) || empty($_POST["Tratamiento"]) || empty($_POST["Avances"]) )) {
        
            die("<br>Poner los datos faltantes");
        
        }
        
        if(mysqli_query($conn,$sql)){
            
            echo"Se registro reporte";
        }
        
            
        else{
            
            echo"No se inserto correctamente a la base de datos";
            
        }
        mysqli_close($conn);
    }

    function test_input($data){
        
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
        
        
    }






     


    

?>