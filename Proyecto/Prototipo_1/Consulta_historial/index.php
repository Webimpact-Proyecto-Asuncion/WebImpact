
<!DOCTYPE html>
<html>
<head>
<!-- Para hacerlo mobile friendly -->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
	<title>Consulta Reportes</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css">
   

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">



    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
 
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <img src="LOGO_PNG.png" style="width: 90px; height: 90px">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="">Asunción</a>
       
      </div>
      
      <!-- sidebar-header  -->
     
      
      
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-users"></i>
              <span>Empleados</span>
              
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Crear Empleado</a>
                </li>
                <li>
                  <a href="#">Consultar Empleados</a>
                </li>
                <li>
                  <a href="#">Modificar/Eliminar Empleado</a>
                </li>
                 
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-address-card"></i>
              <span>Pacientes</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Registrar Paciente</a>
                </li>
                <li>
                  <a href="#">Modificar/Eliminar Paciente</a>
                </li>
                 <li>
                  <a href="#">Consultar Paciente</a>
                </li>
                 </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-dollar-sign"></i>
              <span>Donaciones</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Registrar Donador</a>
                </li>
                <li>
                  <a href="#">Registrar Donacion</a>
                </li>
                <li>
                  <a href="#">Consultar Donaciones</a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-file-alt"></i>
              <span>Registros de Pacientes</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Crear Registro</a>
                </li>
                <li>
                  <a href="#">Consultar Registros</a>
                </li>
                
                </li>
              </ul>
            </div>
          </li>
         </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <div class="sidebar-footer">
      <a href="#">
        <i class="fas fa-sign-out-alt"></i>
        <span>Cerrar sesion</span>
      </a>
    </div>
    <!-- sidebar-content  -->
  </nav>


   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

  <div class="container">
      <h5>Consulta Reportes</h5>
  </div>

  <div class="container">
   
    <div id="tabla"></div>
  </div>

</main>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
    <script src="index.js"></script>

   
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('php/tabla.php');
    
	});
</script>

