<?php
	
	
	require_once("controladorTabla.php");


	$tabla="";
	
	$tabla.="<table class='table table-bordered table-hover'>";
	$tabla.="<thead class='thead-dark'>";
	$tabla.="<tr>";
	$tabla.="<th>Colaborador</th>";
	$tabla.="<th>Nombre</th>";
	$tabla.="<th>Apellido Paterno</th>";
	$tabla.="<th>Apellido Materno</th>";
	$tabla.="<th>Valoracion</th>";
	$tabla.="<th>Terapia</th>";
	$tabla.="<th>Tratamiento</th>";
	$tabla.="<th>Avances</th>";
	$tabla.="<th>Fecha</th>";
	$tabla.="<th>Modificar</th>";
	$tabla.="<th>Eliminar</th>";
	$tabla.="</tr";
	$tabla.="</thead>";
	

	$muestra = tabla();
	
	echo $tabla;
	echo $muestra;

?>



