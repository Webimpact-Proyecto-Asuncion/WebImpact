<!DOCTYPE html>
<html>

<head>
    <title>Asuncion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Prototipo_1.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mycss.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/validation.js"></script>

</head>
   
    <!--primera navbar vertical -->
    <nav class="navbar sticky-top  d-flex align-items-center" id="navbar">
        <a id="brand" class="navbar-brand col-sm-3 col-md-2 mr-0 align-content-center" href="#"><h5>Asuncion</h5></a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link " href="#">Cerrar Sesión</a>
            </li>
        </ul>
    </nav>
    <body>
    <!--primera navbar horizontal -->
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
        
 

    <br><br><br>
    <div class="container ">
    <h5 class="container">Registrar Donadores</h5>
    </div>
    
    <br><br><br>
    
    <div class="container CreaPaciente">
        <form action="insert.php" id="frmBox" method="post" onsubmit="return formSubmit();">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <br>
                    <label for="razon_social" class="bold">Razón Social</label>
                    <input type="text" class="form-control" id="RazonSocial" name="RazonSocial">
                    <span class="help-block"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rfc" class="bold">RFC</label>
                    <input type="text" class="form-control" id="RFC" name="RFC">
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono" class="bold">Correo</label>
                    <input type="text" class="form-control" id="Correo" name="Correo">
                </div>
            </div>
          
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Correo" class="bold">Telefono</label>
                    <input type="text" class="form-control" id="Telefono" name="Telefono">
                </div>
            </div>
            
            <br><br>
            <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit" >
            <h3 id="success"></h3>
            <br><br>
        </form>
    </div>
    
        </div>
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
        
    </body>
</html>
