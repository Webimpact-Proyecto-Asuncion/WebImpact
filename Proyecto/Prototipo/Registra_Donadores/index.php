<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">

    <!-- Mio--> 
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="../node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css">
     
   
    
    <script src="js/validation.js"></script>
       
       
    <!-- librerias navbar--> 
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="js/index.js"></script>
    <script src="js/main.js"></script>

    
    

</head>
   
<?php
    include ('../sidebar/index.php');
?>    
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
     
      
    

 

    <br><br><br>
    <div class="container ">
    <h5 class="container">Registrar Donadores</h5>
    </div>
    
    <br><br><br>
    
    <div class="container CreaPaciente">
        <form action="insert.php" id="frmBox" method="post" onsubmit="return formSubmit();" class="container formulario">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <br>
                    <label for="razon_social" class="bold">Razón Social</label>
                    <input type="text" class="form-control" id="RazonSocial" name="RazonSocial" placeholder="" required>
                    <span class="help-block"></span>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="rfc" class="bold">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" required>
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
                    <label for="Correo" class="bold">Fecha</label>
                    <input type="date" class="form-control" id="Fecha" name="Fecha" required>
                </div>
            </div>
            
            
            <br><br>
            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" >
            <h3 id="success"></h3>
            <br><br>
        </form>
   
    
        </div>
        
        <script type="text/javascript">
          
            
        function formSubmit(){
               
            $.ajax({
               
                type:'POST',
                url:'insert.php',
                data:$('#frmBox').serialize(),
                success:function(response){
                    
                    $('#success').html(response);
                    
                }
                
                
            });
            
            var form=document.getElementById('frmBox').reset();
            return false;
            
  
        }
        
        </script>
        <script src="index.js"></script>
        
    </body>
</html>
