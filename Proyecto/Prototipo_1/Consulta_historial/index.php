<?php
    
    include("../_head.html");
    require_once("historial.php");
        
    $result = getHistorialClinico();

   
    if(mysqli_num_rows($result)>0){
        
    echo"<br>";
    echo"Tabla General de Datos";
    echo"<br>";
    echo"<table class ='table container shadow'> <br>";
    while($row = mysqli_fetch_assoc($result)){
        
        echo "<tr>";
        echo "<td>".$row["COL 1"]."</td>";
        echo "<td>".$row["COL 2"]."</td>";
        echo "<td>".$row["COL 3"]."</td>";
        echo "<td>".$row["COL 4"]."</td>";
        echo "<td>".$row["COL 5"]."</td>";
        echo "<td>".$row["COL 6"]."</td>";
        echo "<td>".$row["COL 7"]."</td>";
        echo "<td>".$row["COL 8"]."</td>";
        echo "<td>".$row["COL 9"]."</td>";
        echo "<td>".$row["COL 10"]."</td>";
        echo "<td>".$row["COL 11"]."</td>";
        echo "</tr>";

    }
        
    echo"</table>";
        
    }

?>