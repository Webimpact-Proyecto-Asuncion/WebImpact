<?php

require_once 'util.php'; 


$_POST["donador"] = htmlspecialchars($_POST["donador"]);
$_POST["descripcionDonacion"] = htmlspecialchars($_POST["descripcionDonacion"]); 

$donador = $_POST['donador'];
$descripcionDonacion = $_POST['descripcionDonacion'];
$fechaDonacion = $_POST['fechaDonacion'];

echo $donador;


 





if(isset($donador) && !empty($donador) && isset($descripcionDonacion) && !empty($descripcionDonacion) && isset($fechaDonacion) && !empty($fechaDonacion))
{
    
    addDonacion($donador,$descripcionDonacion,$fechaDonacion);
  
}




include("registrarDonacion.html");

?>  