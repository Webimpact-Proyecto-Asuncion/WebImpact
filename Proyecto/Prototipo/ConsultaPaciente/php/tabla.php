<?php
	
	require_once("controladorTabla.php");

	$tabla="";

	$tabla.="<table class='table table-bordered table-hover'>";
	$tabla.="<thead class='thead-dark'>";
	$tabla.="<tr>";
	$tabla.="<th>Num Paciente</th>";
	$tabla.="<th>Nombre Paciente</th>";
	$tabla.="<th>Apellido Paterno</th>";
	$tabla.="<th>Apellido Materno</th>";
	$tabla.="<th>Telefono</th>";
	$tabla.="<th>Diagnostico</th>";
	$tabla.="<th>Tipo de terapia</th>";
	$tabla.="<th>Ingreso</th>";
	$tabla.="<th>Modificar</th>";
	$tabla.="<th>Eliminar</th>";
	$tabla.="</tr";
	$tabla.="</thead>";
		
	
	$muestra = tabla();
	
	echo $tabla;
	echo $muestra;
?>
	
							
							
				
	