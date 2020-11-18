<?php   
    session_start();
 
    include("_header.html");

    include("_navbar.html");
        
?>   
   
   
   <br><br><br>
    <div class="container ">
    <h5 class="container">Registrar Donadores</h5>
    </div>
    
    <br><br><br>
    
    <div class="container CreaPaciente">
        <form action="insert.php" id="frmBox" method="post" onsubmit="return formSubmit();" class="container formulario">
            <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="NumeroPaciente" class="bold">Numero Paciente</label>
                            <input type="number" class="form-control" id="NumeroPaciente" name="NumeroPaciente" placeholder="" required>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="Edad" class="bold">Edad</label>
                        <input type="number" class="form-control" id="Edad" name="Edad" placeholder="" required>
                    </div>
                </div>
                
                  <div class="form-row">
                
                    
                    <div class="form-group col-md-6">
                       <label for="Terapia" class="bold">Valoracion</label>
                        <input type="text" class="form-control" id="Valoracion" name="Valoracion" required>
                    </div>

                     <div class="form-group col-md-6">
                       <label for="Terapia" class="bold">Terapia</label>
                        <input type="text" class="form-control" id="Terapia" name="Terapia" required>
                    </div>
                    
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Tratamiento" class="bold">Tratamiento</label>
                        <input type="text" class="form-control" id="Tratamiento" name="Tratamiento" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Avances" class="bold">Avances</label>
                        <input type="text" class="form-control" id="Avances" name="Avances" required>
                    </div>
                    
                </div>
           
            
            
            <br><br>
            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" >
            <h3 id="success"></h3>
            <br><br>
        </form>
   
    
        </div>
        
<?php   

 
 
    include("_footer.html");

        
?>   