<?php
    include_once("../dbUtil.php");
    function getEmpleados(){
        $connection=connectDB();
        $sql= 'SELECT * FROM Empleados';
        $queryResult=mysqli_query($connection,$sql);
        disconectDB($connection);
        if(mysqli_num_rows($queryResult)>0){
            while($row = mysqli_fetch_assoc($queryResult)){
                echo "<tr>";
                echo "<td>".$row["NumeroEmpleado"]."</td>";
                echo "<td>".$row["NombreEmpleado"]."</td>";
                echo "<td>".$row["Telefono"]."</td>";
                echo "<td>".$row["Domicilio"]."</td>";
                echo "<td>".$row["Especialidad"]."</td>";
                echo "<td>".$row["Correo"]."</td>";
                echo "<td>".$row["password"]."</td>";
                echo "</tr>";
            }
        }
    }

?>