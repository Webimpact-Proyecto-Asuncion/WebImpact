<?php

require_once 'util.php'; 

$donadorError="";



if(!isset($donador) && empty($donador))
{
    $donadorError = "Elige una Razón Social";
}
else
{
  $donadorError="";
}



 include("registrarDonacion.html");

 ?>