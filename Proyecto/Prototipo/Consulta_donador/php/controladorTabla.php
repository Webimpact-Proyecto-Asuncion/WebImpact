<?php

	require_once("tabla.php");
    

	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$tabla="";

	$tabla.="<table class='table table-bordered table-hover'>";
	$tabla.="<thead class='thead-dark'>";
	$tabla.="<tr>";
	$tabla.="<th>Id_Donador</th>";
	$tabla.="<th>Razon Social</th>";
	$tabla.="<th>RFC</th>";
	$tabla.="<th>Correo</th>";
	$tabla.="<th>Telefono</th>";
	$tabla.="<th>Nacimiento</th>";
	$tabla.="<th>Modificar</th>";
	$tabla.="<th>Eliminar</th>";
	$tabla.="</tr";
	$tabla.="</thead>";


	$muestra = tabla($page);

	if(isset($_POST["consulta"])){
        $muestra = tabla1($page, $_POST["consulta"]);
        //echo $result;
    }
	
	echo $tabla;
	echo $muestra;

	

?>