<?php

	require_once("controladorTabla.php");


	$tabla="";
	

	$tabla.="<table class='table table-bordered table-hover'>";
	$tabla.="<thead class='thead-dark'>";
	$tabla.="<tr>";
	$tabla.="<th>Donador</th>";
	$tabla.="<th>Descripcion</th>";
	$tabla.="<th>Fecha</th>";
	$tabla.="<th>Modificar</th>";
	$tabla.="<th>Eliminar</th>";
	$tabla.="</tr";
	$tabla.="</thead>";

	$muestra = tabla();
	
	echo $tabla;
	echo $muestra;
?>


	
						
