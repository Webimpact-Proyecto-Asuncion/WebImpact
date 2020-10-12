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
    $rol=getRol($usuario);
    $permisos=getPermisos($rol);
    var_dump($permisos);
    
    if($usuario&&$password){
        header('Location: https://royerdac99.codes/WebImpact/Proyecto/Prototipo_1/dasboard/dashboard.php');
    }
?>