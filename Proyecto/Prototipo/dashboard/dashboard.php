<?php
    session_start();
    if($_SESSION["rol"]=="Administracion"){
        include_once("./_head.html");
        include_once("../_navbar.html");
        include_once("./_dashboard.html");
    }else{
        include_once("./_head.html");
        include_once("./_error_rol");
        //cerrar sesion?
    }
    
?>