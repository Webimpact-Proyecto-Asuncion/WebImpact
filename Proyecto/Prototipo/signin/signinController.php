<?php   
    if(isset($_POST["correo"])&&isset($_POST["password"])){
        include("session_util.php");
        $correo=$_POST["correo"];
        $password=$_POST["password"];   
        $isuser=credentials($correo,$password);
        if($isuser){
            session_start();
            $_SESSION["rol"]=getRol($isuser);
            //$_SESSION[""]=;
            echo("https://royerdac99.codes/WebImpact/Proyecto/Prototipo/dashboard/dashboard.php");
        }else{
            echo("false");
        }
        
    }
?>