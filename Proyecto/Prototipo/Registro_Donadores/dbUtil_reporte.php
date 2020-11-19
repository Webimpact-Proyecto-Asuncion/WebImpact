<?php

    function connectDB(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="donadores";

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