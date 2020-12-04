<?php

	require_once("tabla.php");
	require_once("buscador.php");
	$page = isset($_GET['page']) ? $_GET['page'] : 1;

	if(isset($_POST["consulta"])){
			$result = buscar($_POST["consulta"]);
			echo $result;
	}


	$tabla="";


	$tabla.="<table class='table table-bordered table-hover'>";
	$tabla.="<thead class='thead-dark'>";
	$tabla.="<tr>";
	$tabla.="<th>Nombre Paciente</th>";
	$tabla.="<th>ApellidoPaterno</th>";
	$tabla.="<th>ApellidoMaterno</th>";
	$tabla.="<th>Faltas</th>";
	$tabla.="<th>Total</th>";
	$tabla.="<th>Asistencias</th>";
	$tabla.="<th>Falta</th>";
	$tabla.="<th>Justificar</th>";
	$tabla.="</tr";
	$tabla.="</thead>";


	
	$muestra = tabla($page);
	
	echo $tabla;
	echo $muestra;
	
?>