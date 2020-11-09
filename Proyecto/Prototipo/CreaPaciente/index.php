<?php
include '_header.html'; 
?>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <img src="../images/LOGO PNG.png" style="width: 95px; height: 90px">
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
                
          
              </ul>
            </div>
        
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
<br>
 
    <div class="container-fluid">
        <h3 class="container">Registrar Paciente</h3>
        <br><br>
    </div>

    <div class="container formulario">
        <form id="form">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <br>
                    <label for="Nombre" class="bold">Nombre(s)</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. José Manuel">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Apellido Paterno" class="bold">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidoP" name="apellidoP" placeholder="Ej. Pérez">
                </div>
                <div class="form-group col-md-6">
                    <label for="Apellido Materno" class="bold">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidoM" name="apellidoM" placeholder="Ej. Ramírez">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="domicilio" class="bold">Domicilio</label>
                    <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Ej. Calle Robles #34 Col. El Paseo">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="GEstado" class="bold">Estado</label>
                    <select class="custom-select mr-sm-2" id="estado" name="estado">
                        <option selected>Selecciona...</option>
                        <option value="1">Aguascalientes</option>
                        <option value="2">Baja California</option>
                        <option value="3">Baja California Sur</option>
                        <option value="4">Campeche</option>
                        <option value="5">Chiapas</option>
                        <option value="6">Chihuahua</option>
                        <option value="7">Ciudad de México</option>
                        <option value="8">Coahuila</option>
                        <option value="9">Colima</option>
                        <option value="10">Durango</option>
                        <option value="11">Estado de México</option>
                        <option value="12">Guanajuato</option>
                        <option value="13">Guerrero</option>
                        <option value="14">Hidalgo</option>
                        <option value="15">Jalisco</option>
                        <option value="16">Michoacán</option>
                        <option value="17">Morelos</option>
                        <option value="18">Nayarit</option>
                        <option value="19">Nuevo León</option>
                        <option value="20">Oaxaca</option>
                        <option value="21">Puebla</option>
                        <option value="22">Querétaro</option>
                        <option value="23">Quintana Roo</option>
                        <option value="24">San Luis Potosí</option>
                        <option value="25">Sinaloa</option>
                        <option value="26">Sonora</option>
                        <option value="27">Tabasco</option>
                        <option value="28">Tamaulipas</option>
                        <option value="29">Tlaxcala</option>
                        <option value="30">Veracruz</option>
                        <option value="31">Yucatán</option>
                        <option value="32">Zacatecas</option>
                  </select>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="municipio" class="bold">Municipio</label>
                        <input type="text" class="form-control" id="municipio" name="municipio">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="tel" class="bold">Teléfono</label>
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Ej. 4421015623">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for=correo class="bold">Correo Electrónico</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Ejemplo@gmail.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="fechaNacimiento" class="bold">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="nacimiento" name="nacimiento">
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group col-md-3">
                    <label for="Genero" class="bold">Género</label>
                    <select class="custom-select mr-sm-2" id="genero" name="genero">
                    <option selected>Selecciona...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Diagnostico" class="bold">Diagnóstico</label>
                    <input type="text" class="form-control" name="diagnostico" id="diagnostico" placeholder="Ej. El paciente padece...">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Lesion" class="bold">Lesión</label>
                    <input type="text" class="form-control" id="lesion" name="lesion" placeholder="Ej. Lesión en rodilla izquiera">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="ingreso" class="bold">Ingreso</label>
                    <input type="date" class="form-control" id="ingreso" name="ingreso">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="dependencia" class="bold">Dependencia</label>
                    <input type="text" class="form-control" id="dependencia" name="dependencia" placeholder="Ej. El paciente depende de... ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="foto" class="bold">Fotografía</label>
                    <br>
                    <input type="file" name="foto" id="foto">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="curp" class="bold">Curp</label>
                    <br>
                    <input type="file" name="curp" id="curp">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="acta" class="bold">Acta de Nacimiento</label>
                    <input type="file" name="acta" id="acta">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="comprobante" class="bold">Comprobante de Domicilio</label>
                    <input type="file" name="comprobante" id="comprobante">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="recomendacion" class="bold">Recomendación Médica</label>
                    <input type="file" name="recomendacion" id="recomendacion">
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-info" value="Aceptar" name="submit" id="submit"></input>
            <br><br>
    </div>

    <br><br>
    <div id="table">
    </div>
    </div>
  
</main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="crearPaciente.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="index.js"></script>

    
    <footer></footer>

</body>

</html>