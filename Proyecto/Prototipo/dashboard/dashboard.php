<?php
    session_start();
    echo($_SESSION["rol"]);
    if($_SESSION["rol"]=="Administracion"||$_SESSION["rol"]=="Terapeuta"){
        include_once("./_head.html");
        include_once("./_navbar.html");
        include_once("./_dashboard.html");
        include_once("./_footer.html");
    }else{
        include_once("./_head.html");
        include_once("./_error_rol");
        //cerrar sesion?
    }
?>