<?php
include '_header.html'; 
require_once 'util.php'; 
?>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="menu-icon">
            </div>
            <div class="menu">
                <ul class="navBarFont">
                    <img class="logo" src="../images/LOGO PNG.png" width="110" height="100" alt="Logo">
                    <li><a href="../partials/Prototipo_1.html">Inicio</a></li>
                    <li><a href="../partials/Administracion.html">Administración</a></li>
                    <li><a href="../partials/Prototipo1_consultas.html">Consultas</a></li>
                    <li><a href="#">Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <br><br>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="ajaxDonacion.js"></script>

<?php include '_footer.html'; ?>