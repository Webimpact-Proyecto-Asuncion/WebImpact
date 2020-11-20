<?php
    session_start();
    echo($_SESSION["rol"]);
    if($_SESSION["rol"]=="Administracion"){
        include_once("./_head.html");
        include_once("../sidebar/_sidebarA.html");
        include_once("./_dashboard.html");
        include_once("./_footer.html");
    }else if ($_SESSION["rol"]=="Terapeuta") {
        //cerrar sesion?
        include_once("./_head.html");
        include_once("../sidebar/_sidebarT.html");
        include_once("./_dashboard.html");
        include_once("./_footer.html");
    } else{
                include_once("./_head.html");
                include_once("./_error_rol");
    }
?>