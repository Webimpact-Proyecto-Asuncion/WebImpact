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
        <form action="donaciones">

        <div class="form-row">
                <div class=" form-group col-md-6">
                    <br>
                    <label for="razonS" class="bold">Selecciona una Razón Social</label>
                    
                    <?= selectionDonadores("RazonSocial","id")?>
                    
                    
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="monto" class="bold">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción de la donación...">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fecha" class="bold">Fecha de Donación</label>
                    <input type="date" class="form-control" id="fechaDonacion" name="fechaDonacion">
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-info" value="Registrar" name="submit" id="submit">
            <br><br>
        </form>

    </div>

<?php include '_footer.html'; ?>