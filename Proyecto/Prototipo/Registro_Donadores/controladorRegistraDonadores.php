<?php
    session_start();

    include("registraDonadoresUtil.php");

    if(isset($_POST["RazonSocial"])&&isset($_POST["RFC"])&&isset($_POST["Correo"])&&isset($_POST["Telefono"])&&isset($_POST["Fecha"])){
        
        $RazonSocial=$_POST["RazonSocial"];
        $RFC=$_POST["RFC"];
        $Correo=$_POST["Correo"];
        $Telefono=$_POST["Telefono"];
        $Fecha=$_POST["Fecha"];
        
        registraDonadores($RazonSocial,$RFC,$Correo,$Telefono,$Fecha);
        //registraDonadores(,$_SESSION["RazonSocial"],$RFC,$Correo,$Telefono,$Fecha);
    }

?>




