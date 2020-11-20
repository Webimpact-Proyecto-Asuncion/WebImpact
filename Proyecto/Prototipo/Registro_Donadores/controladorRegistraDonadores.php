<?php
    session_start();

    include("registraDonadoresUtil.php");

    if(isset($_POST["RazonSocial"])&&isset($_POST["RFC"])&&isset($_POST["Correo"])&&isset($_POST["Telefono"])&&isset($_POST["Nacimiento"])){
        
        $RazonSocial=$_POST["RazonSocial"];
        $RFC=$_POST["RFC"];
        $Correo=$_POST["Correo"];
        $Telefono=$_POST["Telefono"];
        $Nacimiento=$_POST["Nacimiento"];
        
        registraDonadores($RazonSocial,$RFC,$Correo,$Telefono,$Nacimiento);
        //registraDonadores(,$_SESSION["RazonSocial"],$RFC,$Correo,$Telefono,$Fecha);
    }

?>




