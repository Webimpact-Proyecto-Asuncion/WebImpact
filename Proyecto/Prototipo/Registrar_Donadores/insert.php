<?php

    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="donadores";

    $conn=mysqli_connect($servername,$username,$dbpassword,$dbname);

    if(!$conn){
        
        die("Could not connect:".mysqli_connect_error());
    }
    else{
    
        $RazonSocial =test_input($_POST['RazonSocial']);
        $RFC =test_input($_POST['RFC']);
        $Correo =test_input($_POST['Correo']); 
        $Telefono =test_input($_POST['Telefono']);
        
        $sql="INSERT INTO donador(RazonSocial,RFC,Correo,Telefono) VALUES('$RazonSocial','$RFC','$Correo','$Telefono')";
        
        if ( (empty($_POST["RazonSocial"]) || empty($_POST["RFC"]) || empty($_POST["Correo"]) || empty($_POST["Telefono"]))) {
        
        die("Poner los datos faltantes");
        
        }
        
        if(mysqli_query($conn,$sql)){
            
            echo"One record inserted";
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