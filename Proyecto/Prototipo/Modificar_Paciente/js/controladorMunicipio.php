<?php

include_once 'conexion.php';

if(isset($_GET["estado"])){
    $conn = conexion(); 
    
    $idMunicipio = $_GET["municipio"];
    echo "Municipio: ".$idMunicipio;
    $idEstado =  $_GET["estado"]; 
    $consulta = "CALL OpcionesMunicipio($idEstado);"; 

    $resultados_consulta = $conn->query($consulta); 

        while($row = mysqli_fetch_array($resultados_consulta, MYSQLI_BOTH))
        {
            $resultado .= '<option value="'.$row["idMunicipio"].'"';
            if($idMunicipio == $row["idMunicipio"])
            {
                $resultado .= ' selected';
            }
            $resultado.= '>'.$row["Municipio"].'</option>'; 
            
        }
        echo $resultado;

        mysqli_free_result($resultados_consulta);  // liberar memoria

        closeDb($conn); 
        


}

?>