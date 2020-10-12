<?php
    //create connection
    function connectDB(){
        $servername="localhost";
        $username="WITEAM";
        $password="WebImpact$2020";
        $dbname="asuncion";

        $connection=mysqli_connect($servername,$username,$password,$dbname);
        if(!$connection){
            die("Connectio failed: ".mysqli_connect_error());
        }
        return $connection;
    }
    //close conection
    function  disconectDB($connection){
        mysqli_close($connection);
    }

    function isUser($username){
        $connection=connectDB();
        $sql="SELECT NumeroEmpleado,Correo FROM Empleados WHERE Correo='".$username."'";
        $queryResult=mysqli_query($connection,$sql);
        disconectDB($connection);
        if(mysqli_num_rows($queryResult)>0){
            $row=mysqli_fetch_assoc($queryResult);
            if($row["Correo"]==$username){
                return $row["NumeroEmpleado"];
            }else{

            }
        }
    }

    function isPassword($NumeroEmpleado,$password){
        $connection=connectDB();
        $sql="SELECT password FROM Empleados WHERE NumeroEmpleado='".$NumeroEmpleado."'";
        $queryResult=mysqli_query($connection,$sql);
        disconectDB($connection);
        if(mysqli_num_rows($queryResult)>0){
            $row=mysqli_fetch_assoc($queryResult);
            if($row["password"]==$password){
                return true;
            }else{

            }
        }
    }

    function getRol($NumeroEmpleado){
        $connection=connectDB();
        $sql="SELECT Id_Rol FROM roles_Empleados WHERE NumeroEmpleado='".$NumeroEmpleado."'";
        $queryResult=mysqli_query($connection,$sql);
        disconectDB($connection);
        if(mysqli_num_rows($queryResult)>0){
            $row=mysqli_fetch_assoc($queryResult);
            return $row["Id_Rol"];
        }
    }

    function getPermisos($rol){
        $permisos=array();
        $connection=connectDB();
        $sql="SELECT Id_Privilegio FROM roles_privilegios WHERE Id_Rol='".$rol."'";
        $queryResult=mysqli_query($connection,$sql);
        disconectDB($connection);
        if(mysqli_num_rows($queryResult)>0){
            while($row=mysqli_fetch_assoc($queryResult)){
                array_push($permisos,$row["Id_Privilegio"]);
            }
            return $permisos;
        }
    }
?>
