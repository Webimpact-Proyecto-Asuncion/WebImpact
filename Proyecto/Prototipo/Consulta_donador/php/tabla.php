<?php

	require_once("controladorTabla.php");

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


	$muestra = tabla();
	
	echo $tabla;
	echo $muestra;

	

?>