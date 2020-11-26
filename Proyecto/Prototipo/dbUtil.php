<?php
    function connectDB(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="asuncion1";

        $connection=mysqli_connect($servername,$username,$password,$dbname);
        if(!$connection){
            die("Connection failed: ".mysqli_connect_error());
        }
        return $connection;
    }
    function  disconnectDB($connection){
        mysqli_close($connection);
    }
?>
