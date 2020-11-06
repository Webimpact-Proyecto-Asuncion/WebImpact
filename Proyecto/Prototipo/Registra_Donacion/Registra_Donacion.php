<?php
include '_header.html'; 
require_once 'util.php'; 
?>

<body>
    <header>
    <nav class="navbar sticky-top  d-flex align-items-center" id="navbar">
    <a id="brand" class="navbar-brand col-sm-3 col-md-2 mr-0 align-content-center" href="#"><h5>Asuncion</h5></a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link " href="#">Cerrar Sesión</a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav  class="col-md-2 d-none d-md-block  sidebar">
            <div class="sidebar-sticky">
                <br>
                <br>
                <br>
                <ul class="nav flex-column">
                    <li id="sidebar" class="nav-item">
                        <a  class="nav-link active" href="../dashboard/dashboard.php"><img src="../images/sidebarImages/home-24px.svg">Casa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard/dashboard.php"><img src="../images/sidebarImages/engineering-24px.svg">Administracion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard/dashboard.php"><img src="../images/sidebarImages/search-24px.svg">Consultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Registra_Donacion/Registra_Donacion.html"><img src="../images/sidebarImages/monetization_on-24px.svg">Donaciones</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <br><br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="container inicio negro">
        <h4>Registrar Donación</h4>
    </div>

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
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="ajaxDonacion.js"></script>

<?php include '_footer.html'; ?>