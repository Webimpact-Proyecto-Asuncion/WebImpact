<?php
	  session_start();
	  if($_SESSION['rol'] == 'Terapeuta')
	  {
		include('_header.html');
		include('_sidebar.html');
		include('form_actualiza.html');
		include('_footer.html');
	  }
	  else {
		echo "ocurrio un error, contacte al administrador";
	  }



?>