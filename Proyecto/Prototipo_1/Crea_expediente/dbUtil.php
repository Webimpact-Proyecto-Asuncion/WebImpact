<?php
    function connectDB(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="paciente";

        $connection=mysqli_connect($servername,$username,$password,$dbname);
        if(!$connection){
            die("Connection failed: ".mysqli_connect_error());
        }
        return $connection;
    }
    //close conection
    function  disconnectDB($connection){
        mysqli_close($connection);
    }
?>
