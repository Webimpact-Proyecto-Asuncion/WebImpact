<?php
<<<<<<< HEAD
	session_start();
=======

	session_start();
  if($_SESSION['rol'] == 'Administracion')
  {

>>>>>>> 8c123ce1d0064e4eaf813f72d87bd475ef3964fd
	include ('_header.html');
  	include ('../sidebar/index.php');
  	include('_form_actualiza.html');
  	include ('_footer.html');
  	}
  else {
    echo "ocurrio un error, contacte al administrador";
  }
?>