<?php

	require_once("controladorTabla.php");


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


	
	$muestra = tabla();
	
	echo $tabla;
	echo $muestra;
?>