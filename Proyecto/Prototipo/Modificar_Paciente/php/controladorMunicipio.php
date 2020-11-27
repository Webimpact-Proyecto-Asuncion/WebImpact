<?php

include_once 'conexion.php';

if(isset($_GET["estado"])){
    $conn = conexion(); 

    $idEstado =  $_GET["estado"]; 
    $idMunicipio = $_GET["municipio"];
    echo " ID:**** " . $idMunicipio;
    $consulta = "CALL OpcionesMunicipio('$idEstado');"; 
    $consultaS = "CALL getMunicipioById('$idEstado','$idMunicipio');";

    $resultados_consulta = $conn->query($consulta); 
    $resultado_municipio = $conn->query($consultaS);

    $selected = mysqli_fetch_assoc($resultado_municipio);

        while($row = mysqli_fetch_array($resultados_consulta, MYSQLI_BOTH))
        {
            $resultado .= '<option value="'.$row["idMunicipio"].'"'; 
            $resultado .= 'selected';
            $resultado .= '>'.$row["Municipio"].'</option>';
            
        }
        echo $resultado;

        mysqli_free_result($resultados_consulta);  // liberar memoria

        closeDb($conn); 
        


}

?>