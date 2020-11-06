
<!DOCTYPE html>
<html>
<head>
<!-- Para hacerlo mobile friendly -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Consulta Reportes</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../../node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css">


    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
  <header>
     <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="Prototipo_1.html">Inicio</a></li>
                    <li><a href="Administracion.html">Administracion</a></li>
                    <li><a href="Prototipo1_consultas.html">Consultas</a></li>
                    <li><a href="#">Pacientes</a></li>
                </ul>
            </div>
        </nav>
  </header>

  

  <div class="container">
      <h5>Consulta de Reportes</h5>
  </div>

	<div class="container">
   
		<div id="tabla"></div>
	</div>



   
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('php/tabla.php');
    
	});
</script>

