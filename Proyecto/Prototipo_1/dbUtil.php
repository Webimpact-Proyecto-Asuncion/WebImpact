<?php
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
?>