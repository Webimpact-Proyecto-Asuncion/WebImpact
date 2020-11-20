<?php

function connectDb()
{

    $servername="localhost";
    $username="Matu";
    $password="Matu$2020";
    $dbname="asuncion1";

    $conn = mysqli_connect($servername, $username, $password, $dbname); 

    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error()); 
    }

    return $conn;
    
}

function closeDb($mysql)
{
    mysqli_close($mysql); 
}



function selectionDonadores()
{
    $conn = connectDb();
    $query = "CALL OpcionesDonador();";

    $result = mysqli_query($conn,$query);

    closeDb($conn);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<option value=".$row["id"].">".$row["RazonSocial"]."</option>";
        }
    }
}


function addDonacion($razonSocial, $descripcion, $fecha)
{
    $conn = connectDb(); 

    $sql = "CALL CrearDonacion('$descripcion',$razonSocial,'$fecha');";

    if(mysqli_query($conn, $sql))
    {
       echo "Donación registrada exitosamente!";
       closeDb($conn); 
       return true; 
    }
    else
    {
        echo " ERROR: " . $sql . " " . mysqli_error($conn); 
       
        closeDb($conn); 
        return false;
    }
    closeDb($conn); 
}









?>