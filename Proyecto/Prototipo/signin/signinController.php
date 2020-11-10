<?php   
    session_start();
    if(isset($_POST["usuario"])){
        if(isset($_POST["password"])){
            $_SESSION["usuario"]=$_POST["usuario"];
            $_SESSION["password"]=$_POST["password"];
        }
    }
    include_once("session_util.php");
    $usuario=isUser($_SESSION["usuario"]);
    $password=isPassword($usuario,$_SESSION["password"]);
    if($usuario&&$password){
        $rol=getRol($usuario);
        $permisos=getPermisos($rol);
        $_SESSION["rol"]=$rol;
        $_SESSION["permisos"]=$permisos;
        if($_SESSION["rol"]=="Administracion"){
            echo("https://royerdac99.codes/WebImpact/Proyecto/Prototipo_1/dashboard/dashboard.php");
        }else if($_SESSION["rol"]=="Terapeuta"){
            echo("https://royerdac99.codes/WebImpact/Proyecto/Prototipo_1/Modifica_exp.html");

        }
    }else{
        echo("false");
        //header('Location: https://royerdac99.codes/WebImpact/Proyecto/Prototipo_1/signin/signin.php');
    }
    
?>