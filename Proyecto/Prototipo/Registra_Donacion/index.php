<?php
include '_header.html'; 
require_once 'util.php'; 
?>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <img src="../images/LOGO PNG.png" style="width: 90px; height: 90px">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#">Asunción</a>
       
      </div>
      
      <!-- sidebar-header  -->
     
      
      
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <br>
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
          <br><br>
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
          <br><br>
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
          <br><br>
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
    <!-- sidebar-content  -->

    <div class="sidebar-footer">
      <a href="#">
        <i class="fas fa-sign-out-alt"></i>
        <span>Cerrar sesion</span>
      </a>
    </div>
   
  </nav>
<!-- sin este div -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

  <div class="container ">
    <div class="container inicio negro ubicacion">
        <h4>Registrar Donación</h4>

    <div class="container formulario">
        <form id="formDonacion">

        <div class="form-row">
                <div class=" form-group col-md-6">
                    <br>
                    <label for="razonS" class="bold">Selecciona una Razón Social</label>
                    
                    <?= selectionDonadores("RazonSocial","id")?>
                    
                    
                    
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="descripcion" class="bold">Descripción</label>
                    <input type="text" class="form-control" id="descripcionDonacion" name="descripcionDonacion" placeholder="Descripción de la donación...">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fecha" class="bold">Fecha de Donación</label>
                    <input type="date" class="form-control" id="fechaDonacion" name="fechaDonacion">
                </div>
            </div>
            <br>
            
            <input type="submit" class="btn btn-info" value="Registrar" name="submitDonacion" id="submitDonacion">
            <br><br>
        </form>

    </div>
    </div>
    <br><br>
    
</main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="index.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="ajaxDonacion.js"></script>

<?php include '_footer.html'; ?>