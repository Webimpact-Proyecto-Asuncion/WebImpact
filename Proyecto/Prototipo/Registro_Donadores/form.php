<?php
  session_start();
  if($_SESSION['rol'] == 'Administracion')
  {
    include("_header.html");
    include("../sidebar/_sidebarA.html");
  }
  else {
    echo "ocurrio un error, contacte al administrador";
  } 
        
?>   
   
   
   <br><br><br>
    <div class="container ">
    <h5 class="container">Registrar Donadores </h5>
    </div>
    
    <br><br><br>
    
    <div class="container CreaPaciente">
        <form action="insert.php" id="frmBox" method="post" onsubmit="return formSubmit();" class="container formulario">
            
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <br>
                    <label for="razon_social" class="bold">Razón Social</label>
                    <input type="text" class="form-control" id="RazonSocial" name="RazonSocial" placeholder="" required>
                    <span class="help-block"></span>
                </div>
                
            </div>
          
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rfc" class="bold">RFC</label>
                    <input type="text" class="form-control" id="RFC" name="RFC" required>
                </div>
                 
                <div class="form-group col-md-6">
                    <label for="telefono" class="bold">Correo</label>
                    <input type="email" class="form-control" id="Correo" name="Correo" required>
                </div>
            </div>
          
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Correo" class="bold">Telefono</label>
                    <input type="tel" class="form-control" id="Telefono" name="Telefono" pattern="^\d{10}$" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Correo" class="bold">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="Nacimiento" name="Nacimiento" required>
                </div>
            </div>
           
            
            
            <br><br>
            <button id="Registrar" class="btn btn-info"  >Registrar</button>
        </form>
   
    
        </div>
        
<?php   

 
 
    include("_footer.html");

        
?>   