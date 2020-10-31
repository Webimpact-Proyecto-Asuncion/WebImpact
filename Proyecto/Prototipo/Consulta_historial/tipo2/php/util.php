<?php
	
	function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="historialclinico";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
	}





	function actualizaDatos(){
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="UPDATE t_persona set nombre='$n',apellido='$a',email='$e',telefono='$t' where id='$id'";

	echo $result=mysqli_query($conexion,$sql);

	}

	function agregarDatos(){
		$conexion=conexion();
		$n=$_POST['nombre'];
		$a=$_POST['apellido'];
		$e=$_POST['email'];
		$t=$_POST['telefono'];

		$sql="INSERT into t_persona (nombre,apellido,email,telefono)values ('$n','$a','$e','$t')";
		echo $result=mysqli_query($conexion,$sql);
	}


	function eliminarDatos(){
		$conexion=conexion();
		$id=$_POST['id'];

		$sql="DELETE from t_persona where id='$id'";
		echo $result=mysqli_query($conexion,$sql);
	}




?>