<?php   
    if(isset($_POST["correo"])&&isset($_POST["password"])){
        include("session_util.php");
        $correo=$_POST["correo"];
        $password=$_POST["password"];   

        $isuser=isUser($correo);
        if($isuser){
            //echo("isuser");
            if(veryPass($isuser,$password)){
                session_start();
                $_SESSION["rol"]=getRol($isuser);
                $_SESSION["id"]=$isuser;

                //$_SESSION[""]=;
                //echo("verified");
                echo("https://royerdac99.codes/WebImpact/Proyecto/Prototipo/dashboard/dashboard.php");
            }
        }else{
            echo("false");
        }
        
    }
?>

