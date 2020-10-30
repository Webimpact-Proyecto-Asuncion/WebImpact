<<<<<<< HEAD
<?php
    
    include("../_head.html");
    require_once("historial.php");
        
    $result = getHistorialClinico();
    echo"<br>";
    echo"Tabla General de Datos";
    echo"<br>";
    echo"<table class ='table table-striped table-sm'> <br>";
   
    if(mysqli_num_rows($result)>0){
        
   
    while($row = mysqli_fetch_assoc($result)){
        
        echo "<tr>";
        echo "<td>".$row["Tipo"]."</td>";
        echo "<td>".$row["NumeroEmpleado"]."</td>";
        echo "<td>".$row["NombreEmpleado"]."</td>";
        echo "<td>".$row["NumeroPaciente"]."</td>";
        echo "<td>".$row["NombrePaciente"]."</td>";
        echo "<td>".$row["ApellidoPaterno"]."</td>";
        echo "<td>".$row["ApellidoMaterno"]."</td>";
        echo "<td>".$row["Edad"]."</td>";
        echo "<td>".$row["Ingreso"]."</td>";
        echo "<td>".$row["Diagnostico"]."</td>";
        echo "<td>".$row["Tratamiento"]."</td>";
        echo "<td>".$row["Fecha"]."</td>";
        echo "</tr>";

    }
        
    echo"</table>";
        
    }

?>
