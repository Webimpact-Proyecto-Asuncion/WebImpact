<?php

require_once 'util.php'; 


$_POST["donador"] = htmlspecialchars($_POST["donador"]); 
$donador = $_POST["donador"];

$_POST["descripcionDonacion"] = htmlspecialchars($_POST["descripcionDonacion"]); 
$descripcionDonacion = $_POST["descripcionDonacion"]; 

$fechaDonacion = $_POST["fechaDonacion"];

$donadorError = "";
$descripcionError = "";
$fechaError = ""; 

$submit = $_POST["submitted"];

$message = "Porfavor llena todos los campos.";



if(isset($donador) && !empty($donador) && isset($descripcionDonacion) && !empty($descripcionDonacion) && isset($fechaDonacion) && !empty($fechaDonacion))
{
    
    addDonacion($donador,$descripcionDonacion,$fechaDonacion);
  
}
else
{
    echo "<script type='text/javascript'>alert($message);</script>";
}










include("registrarDonacion.html");

?>  