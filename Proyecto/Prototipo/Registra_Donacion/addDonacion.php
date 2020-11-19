<?php

require_once 'util.php'; 


$_POST["donador"] = htmlspecialchars($_POST["donador"]);
$_POST["descripcionDonacion"] = htmlspecialchars($_POST["descripcionDonacion"]); 

$donador = $_POST['donador'];
$descripcionDonacion = $_POST['descripcionDonador'];
$fechaDonacion = $_POST['fechaDonacion'];

echo $donador;


 





if(isset($donador) && !empty($donador) && isset($descripcionDonacion) && !empty($descripcionDonacion) && isset($fechaDonacion) && !empty($fechaDonacion))
{
    
    addDonacion($donador,$descripcionDonacion,$fechaDonacion);
  
}
else{
    echo "NO SE PUDO";
}



include("registrarDonacion.html");

?>  