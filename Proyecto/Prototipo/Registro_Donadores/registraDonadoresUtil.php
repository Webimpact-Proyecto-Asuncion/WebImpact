<?php

    include("dbUtil_reporte.php");

    /*

    function getDonadores(){
        $conn=connectDB();
        $sql="CALL OpcionesDonador()";
        $result=mysqli_query($conn,$sql);
        disconnectDB($conn);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<option value=".$row["id"].">".$row["RazonSocial"]."</option>";
            }
        }
    }

    */

  function registraDonadores($RazonSocial,$RFC,$Correo,$Telefono,$Nacimiento){
        $conn=connectDB();
        $sql="CALL CrearDonador('";
        $sql=$sql.$RazonSocial."','".$RFC."','".$Correo."','".$Telefono."','".$Nacimiento."'";
        $sql=$sql.")";
        echo ($sql);
        $result=mysqli_query($conn,$sql);
        disconnectDB($conn);
        echo $result;
      
      
        if(mysqli_query($conn,$sql))
        {
            echo "Donador creado exitosamente!!"; 
            disconnectDB($conn);  
            return true;
        }      
        else
        {
            echo "ERROR al crear Donador!!"; 
            disconnectDB($conn); 
            return false; 
        }
      
      
    }



    










?>