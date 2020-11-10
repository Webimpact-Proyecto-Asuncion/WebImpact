<?php

function connectDb()
{
    $servername="localhost";
        $username="WITEAM";
        $password="WebImpact$2020";
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

/*function getDonadores()
{
    $conn = connectDb(); 
    $sql = "CALL OpcionesDonador();"; 
    $result = mysqli_query($conn,$sql); 

    closeDb($conn);
    
    return $result; 
}*/

function selectionDonadores($nombre,$id)
{
    $resultado = '<select id="donador" name="donador"class=form-control form-control-lg>'; 
    $resultado .= '<option value="" disabled selected>Selecciona un Donador </option>'; 
    $conn = connectDb(); 

    $consulta = "CALL OpcionesDonador();";
    $resultados_consulta = $conn->query($consulta); 


    while($row = mysqli_fetch_array($resultados_consulta, MYSQLI_BOTH))
    {
        $resultado .= '<option value="'.$row[$id].'">'.$row[$nombre].'</option>'; 
    }

    mysqli_free_result($resultados_consulta);  //Liberar la memoria

    $resultado .= '</select>'; 

    closeDb($conn); 
    return $resultado; 
}

/*function datosDonador($id)
{
    $conn = connectDb(); 
    
    $consulta = "CALL RFCDonador($id);"; 
    $resultados_consulta = $conn->query($consulta); 

    while($row = mysqli_fetch_array($resultados_consulta, MYSQLI_BOTH))
    {
        $resultado = '<input type="text" name="rfc" class="form-control placeholder="Ej. MELM8305281H0" value='.$id.'>';
    }

    mysqli_free_result($resultados_consulta);


    return $resultado;

  
}*/

function addDonacion($razonSocial, $descripcion, $fecha)
{
    $conn = connectDb(); 

    $sql = "CALL CrearDonacion($razonSocial,'$descripcion','$fecha');";

    if(mysqli_query($conn, $sql))
    {
       echo "Donación registrada exitosamente!";
       closeDb($conn); 
       return true; 
    }
    else
    {
        //echo "ERROR: " . $sql . "<br>" . mysqli_error($conn); 
        //echo "Porfavor llena todos los campos!";
        closeDb($conn); 
        return false;
    }
    closeDb($conn); 


}

function submitButton($submit)
{
    $submitError = "";
}








?>