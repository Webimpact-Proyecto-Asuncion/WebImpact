<?php   
    session_start();
 
    if($_SESSION['rol'] == 'Terapeuta'){

        include ("_header.html");
        include ('../sidebar/index.php');
        include ('form.php');
        include ("_footer.html");
  
    }else{
        
        echo "ocurrio un error, contacte al administrador";
        
    }      
?>  