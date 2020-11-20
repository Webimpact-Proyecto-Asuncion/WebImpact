<?php

    function connectDB(){
          $servername="localhost";
        $username="Matu";
        $password="Matu$2020";
        $dbname="asuncion1";

        $connection=mysqli_connect($servername,$username,$password,$dbname);
        if(!$connection){
            die("Connection failed: ".mysqli_connect_error());
        }
        return $connection;
    }
    //close conection
    function  disconnectDB($mysql){
        mysqli_close($mysql);
    }
    
    
    
?>