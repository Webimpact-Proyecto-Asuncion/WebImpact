<?php

    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="crud";

    $conn=mysqli_connect($servername,$username,$dbpassword,$dbname);

    if(!$conn){
        
        die("Could not connect:".mysqli_connect_error());
    }
    else{
    
        $RazonSocial =test_input($_POST['RazonSocial']);
        $Nombre =test_input($_POST['Nombre']);
        $RFC =test_input($_POST['RFC']);
        $Correo =test_input($_POST['Correo']); 
        $Telefono =test_input($_POST['Telefono']);
        $Fecha =test_input($_POST['Fecha']);
        
        $sql="INSERT INTO donador(RazonSocial,Nombre,RFC,Correo,Telefono,Fecha) VALUES('$RazonSocial','$Nombre','$RFC','$Correo','$Telefono','$Fecha')";
        
        if ( (empty($_POST["RazonSocial"]) || empty($_POST["Nombre"]) ||empty($_POST["RFC"]) || empty($_POST["Correo"]) || empty($_POST["Telefono"]) || empty($_POST["Fecha"]))) {
        
        die("Poner los datos faltantes");
        
        }
        
        if(mysqli_query($conn,$sql)){
            
            echo"Se registro Donadores";
        }
        
            
        else{
            
            echo"fail to insert";
            
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