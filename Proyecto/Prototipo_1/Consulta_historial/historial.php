<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "historialclinico";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Conexion fallida: ".$conn->connect_error);
    }

    $salida = "";

    $query = "SELECT * FROM historialclinico WHERE NombrePaciente NOT LIKE '' ORDER By NumeroEmpleado LIMIT 10";

     if (isset($_POST['consulta'])) {
        $q = $conn->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM historialclinico WHERE NombrePaciente LIKE '%$q%'";
    }
    
    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
        $salida.="<table border=1 class='tabla_datos'>
                <thead>
                    <tr id='titulo'>
                        <td>Tipo</td>
                        <td>NombreEmpleado</td>
                        <td>NumeroEmpleado</td>
                        <td>NombrePaciente</td>
                        <td>ApellidoPaterno</td>
                        <td>ApellidoMaterno</td>
                        <td>Edad</td>
                        <td>Ingreso</td>
                        <td>Diagnostico</td>
                        <td>Tratamiento</td>
                        <td>fecha</td>

                    </tr>

                </thead>
                

        <tbody>";

        echo "$salida";

         while($row = $resultado->fetch_assoc()){
        
        $salida.="<tr>
        <td>".$row['Tipo']."</td>
        <td>".$row['NombreEmpleado']."</td>
        <td>".$row['NumeroEmpleado']."</td>
        <td>".$row['NombrePaciente']."</td>
        <td>".$row['ApellidoPaterno']."</td>
        <td>".$row['ApellidoMaterno']."</td>
        <td>".$row['Edad']."</td>
        <td>".$row['Ingreso']."</td>
        <td>".$row['Diagnostico']."</td>
        <td>".$row['Tratamiento']."</td>
        <td>".$row['fecha']."</td>
        </tr>";

        }
        $salida.="</tbody></table>";

    }else {
        $salida.="No hay coincidencias";
    }

    echo $salida;

    $conn->close();

?>