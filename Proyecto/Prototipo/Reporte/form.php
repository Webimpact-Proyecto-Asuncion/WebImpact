<?php   
    session_start();
 
    include("_header.html");

    include("_navbar.html");
        
?>   
   
   
   <br><br><br>
    <div class="container ">
    <h5 class="container">Registrar Donadores </h5>
    </div>
    
    <br><br><br>
    
    <div class="container CreaPaciente">
        <form action="insert.php" id="frmBox" method="post" onsubmit="return formSubmit();" class="container formulario">
            <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="NumeroPaciente" class="bold">Nombre Paciente</label>
                            <select type="text" class="form-control" id="NombrePaciente" placeholder="Luis Hernandez" required ></select>
                    </div>
                </div>
                
                  <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="Terapia" class="bold">Valoracion</label>
                       <textarea class="form-control" id="valoracion" rows="3" placeholder="Descripción de doctor" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Terapia" class="bold">Terapia</label>
                        <textarea class="form-control" id="terapia" rows="3" placeholder="Paciente ingres debido a ..." required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Tratamiento" class="bold">Tratamiento</label>
                        <textarea class="form-control" id="tratamiento" rows="3" placeholder="Movilizaciones Pasivas en el antebrazo" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Avances" class="bold">Avances</label>
                        <textarea class="form-control" id="avances" rows="3" placeholder="Se logro completar los rangos de movimiento del codo y antebrazo" required></textarea>
                    </div>
                    
                </div>
           
            
            
            <br><br>
            <button id="Registrar" class="btn btn-info"  >Registrar</button>
        </form>
   
    
        </div>
        
<?php   

 
 
    include("_footer.html");

        
?>   