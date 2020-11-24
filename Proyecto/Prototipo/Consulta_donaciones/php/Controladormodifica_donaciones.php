<?php
    
    require_once("Modifica_donaciones.php");

    
    if(isset($_POST["Descripcion"])&& isset($_POST["Fecha"])&& isset($_POST["id_donador"])){
        
        $Descripcion=$_POST["Descripcion"];
        $Fecha=$_POST["Fecha"];
        $id_donador=$_POST["id_donador"];

       
        modificarDonativos($Descripcion,$Fecha,$id_donador);
    }
?>