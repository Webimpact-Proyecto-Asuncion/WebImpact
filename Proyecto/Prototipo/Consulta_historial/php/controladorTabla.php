<?php
	
	
	require_once("tabla.php");
    

	 $page = isset($_GET['page']) ? $_GET['page'] : 1;
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
	
	if(isset($_POST["consulta"])){
        $muestra = tabla1($page,$_POST["consulta"]);
        //echo $result;
    }
    
	echo $tabla;
	echo $muestra;

?>



