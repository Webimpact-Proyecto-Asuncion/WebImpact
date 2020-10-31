<?php 

  session_start();

  unset($_SESSION['consulta']);

 ?>

 <!-- Librerias para estetica-->

<!DOCTYPE html>
<html>
<head>
<!-- Para hacerlo mobile friendly -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
  <link rel="stylesheet" href="../Prototipo_1/Prototipo_1.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="js/main.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>

<body>

  <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               
               <div class="menu">
                  <ul>
                     <li><a href="../Prototipo_1.html">Inicio</a></li>
                     <li><a href="../Administracion.html">Administracion</a></li>
                     <li><a href="../Prototipo1_consultas.html">Consultas</a></li>
                     <li><a href="#">Pacientes</a></li>
                    </ul>
               </div>
            </nav>
    </header>


  <div class="container inicio blanco">
        <h4>Seleciona paciente</h4>
    </div>

    <div class="container formulario">
        <form>
            <div class="form-row">
                
                    <label for="nombre_pac"> Nombre del paciente</label>
                    <input type="text" id="nombre_pac" class="form-control">
              
           </div>       
        </form>     
    </div>

	<div class="container formulario">
    
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos, esto sirve para que se despliegue el form para poder ingresar a un cliente nuevo-->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <!-- model-sm es para hacerlo mas chico -->
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      
      <!--  Se le agregan los dados que se van a desplegar para agregar a una nueva persona-->
      <div class="modal-body">
        	<label>Tipo</label>
        	<input type="text" name="" id="tipo" class="form-control input-sm">
        	<label>Nombre Empleado</label>
        	<input type="text" name="" id="nempleado" class="form-control input-sm">
        	<label>Numero Empleado</label>
        	<input type="text" name="" id="numempleado" class="form-control input-sm">
        	<label>Nombre Paciente</label>
        	<input type="text" name="" id="npaciente" class="form-control input-sm">
          <label>Apellido Paterno</label>
          <input type="text" name="" id="apaterno" class="form-control input-sm">
          <label>Apellido Materno</label>
          <input type="text" name="" id="amaterno" class="form-control input-sm">
          <label>Edad</label>
          <input type="number" name="" id="edad" class="form-control input-sm">
          <label>Ingreso</label>
          <input type="date" name="" id="ingreso" class="form-control input-sm">
          <label>Diagnostico</label>
          <input type="text" name="" id="diagnostico" class="form-control input-sm">
          <label>Tratamiento</label>
          <input type="text" name="" id="tratamiento" class="form-control input-sm">
          <label>Fecha</label>
          <input type="date" name="" id="fecha" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos, sirve para desplegar el form para que edite todos los datos-->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <!--  -->
      <div class="modal-body">
             <!--  -->
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>Tipo</label>
        	<input type="text" name="" id="tipou" class="form-control input-sm">
        	<label>Nombre empelado</label>
        	<input type="text" name="" id="nempleadou" class="form-control input-sm">
        	<label>Numero empleado</label>
        	<input type="text" name="" id="numempleadou" class="form-control input-sm">
        	<label>Nombre Paciente</label>
        	<input type="text" name="" id="npacienteu" class="form-control input-sm">
          <label>Apellido Paterno</label>
          <input type="text" name="" id="apaternou" class="form-control input-sm">
          <label>Apellido Materno</label>
          <input type="text" name="" id="amaternou" class="form-control input-sm">
          <label>Edad</label>
          <input type="number" name="" id="edadu" class="form-control input-sm">
          <label>Ingreso</label>
          <input type="date" name="" id="ingresou" class="form-control input-sm">
          <label>Diagnostico</label>
          <input type="text" name="" id="diagnosticou" class="form-control input-sm">
          <label>Tratamiento</label>
          <input type="text" name="" id="tratamientou" class="form-control input-sm">
          <label>Fecha</label>
          <input type="date" name="" id="fechau" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    //$('#buscador').load('componentes/buscador.php');
	});
</script>

<!-- Boton de agregar nuevo -->

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          tipo=$('#tipo').val();
          nempleado=$('#nempleado').val();
          numempleado=$('#numempleado').val();
          npaciente=$('#npaciente').val();
          apaterno=$('#apaterno').val();
          amaterno=$('#amaterno').val();
          edad=$('#edad').val();
          ingreso=$('#ingreso').val();
          diagnostico=$('#diagnostico').val();
          tratamiento=$('#tratamiento').val();
          fecha=$('#fecha').val();
            agregarDatos(tipo, nempleado, numempleado, npaciente, apaterno, amaterno, edad, ingreso, diagnostico, tratamiento, fecha);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>