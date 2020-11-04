<?php   
    session_start();
    if(isset($_POST["usuario"])){
        if(isset($_POST["password"])){
            $_SESSION["usuario"]=$_POST["usuario"];
            $_SESSION["password"]=$_POST["password"];
        }
    }
    
    include("session_util.php");
    $usuario=isUser($_SESSION["usuario"]);
    $password=isPassword($usuario,$_SESSION["password"]);
    if($usuario&&$password){
        echo("https://royerdac99.codes/WebImpact/Proyecto/Prototipo/dashboard/dashboard.php");
    }else{
        echo("false");
    }
    
?>