<?php

require_once 'util.php'; 


<<<<<<< HEAD
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
=======
$_POST["donador"] = htmlspecialchars($_POST["donador"]);
$_POST["descripcionDonacion"] = htmlspecialchars($_POST["descripcionDonacion"]); 

$donador = $_POST['donador'];
$descripcionDonacion = $_POST['descripcionDonador'];
$fechaDonacion = $_POST['fechaDonacion'];

echo $donador;


 


>>>>>>> RegistrarPaciente



if(isset($donador) && !empty($donador) && isset($descripcionDonacion) && !empty($descripcionDonacion) && isset($fechaDonacion) && !empty($fechaDonacion))
{
    
    addDonacion($donador,$descripcionDonacion,$fechaDonacion);
  
}
<<<<<<< HEAD
else
{
    echo "<script type='text/javascript'>alert($message);</script>";
=======
else{
    echo "NO SE PUDO";
>>>>>>> RegistrarPaciente
}



<<<<<<< HEAD







=======
>>>>>>> RegistrarPaciente
include("registrarDonacion.html");

?>  