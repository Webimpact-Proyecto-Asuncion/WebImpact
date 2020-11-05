<?php   
    session_start();
    if(isset($_POST["correo"])&&isset($_POST["password"])){
        include("session_util.php");
        $correo=$_POST["correo"];
        $password=$_POST["password"];
        //echo(credentials($correo,$password));
        
        if(credentials($correo,$password)){
            echo("https://rehabilitacionasuncion.000webhostapp.com//dashboard/dashboard.php");
        }else{
            echo("false");
        }
        
    }
    
    
?>