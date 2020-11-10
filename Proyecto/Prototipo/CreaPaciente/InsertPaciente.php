<?php

    require_once ('util.php'); 

   
    $_POST["nombre"] = htmlspecialchars($_POST["nombre"]);
    $_POST["apellidoP"] = htmlspecialchars($_POST["apellidoP"]);
    $_POST["apellidoM"] = htmlspecialchars($_POST["apellidoM"]);
    $_POST["domicilio"] = htmlspecialchars($_POST["domicilio"]);
    $_POST["estado"] = htmlspecialchars($_POST["estado"]); 
    $_POST["tel"] = htmlspecialchars($_POST["tel"]);
    $_POST["correo"] = htmlspecialchars($_POST["correo"]);
    $_POST["nacimiento"] = htmlspecialchars($_POST["nacimiento"]);
    $_POST["genero"] = htmlspecialchars($_POST["genero"]);
    $_POST["diagnostico"] = htmlspecialchars($_POST["diagnostico"]);
    $_POST["lesion"] = htmlspecialchars($_POST["lesion"]);
    $_POST["ingreso"] = htmlspecialchars($_POST["ingreso"]);
    $_POST["dependencia"] = htmlspecialchars($_POST["dependencia"]);
    

  
    $nombre = $_POST["nombre"]; 
    $apellidoP = $_POST["apellidoP"]; 
    $apellidoM = $_POST["apellidoM"]; 
    $domicilio = $_POST["domicilio"]; 
    $telefono = $_POST["tel"];
    $fechaNacimiento = $_POST["nacimiento"];
    $genero = $_POST["genero"];  
    $diagnostico = $_POST["diagnostico"]; 
    $lesion = $_POST["lesion"];
    $ingreso = $_POST["ingreso"]; 
    $dependencia = $_POST["dependencia"]; 
    $correo = $_POST["correo"];
    $estado = $_POST["estado"];
    $municipio = $_POST["municipio"];


    //archivos
    /*$foto = $_FILES["foto"]; 
    $curp = $_FILES["curp"]; 
    $acta = $_FILES["acta"]; 
    $comprobante = $_FILES["comprobante"];
    $recomendacion = $_FILES["recomendacion"];*/


    /*if(isset($_FILES['foto']) && !empty($_FILES['foto'])){
         
        $allowed = ['png', 'jpeg', 'jpg'];
        $fl_name = $_FILES['foto']['name'];
        $fl_extn = strtolower(end(explode('.', $fl_name)));
        $fl_temp = $_Files['foto']['tmp_name'];
    
        if (in_array($fl_extn, $allowed)) {
          img($fl_extn, $fl_temp);
        } else {
          echo 'El archivo que ingreso no es un a imagen';
        }
      
    } 
    else
    {
        echo '<script>alert("Necesitas insertar una imagen.");</script>';
    }
    
    
    function img($fl_extn, $fl_temp) {
      $file_path = 'Fotos/' . substr(md5(time()), 0, 10) . '.' . $fl_extn;
      move_uploaded_file($fl_temp, $file_path);
    }*/
    
    

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["apellidoP"]) && !empty($_POST["apellidoP"]) && isset($_POST["apellidoM"]) 
    && !empty($_POST["apellidoM"]) && isset($_POST["domicilio"]) && !empty($_POST["domicilio"]) && isset($_POST["estado"]) && !empty($_POST["estado"]) && !empty($_POST["tel"]) && isset($_POST["tel"]) && !empty($_POST["tel"]) && isset($_POST["tel"]) && isset($_POST["nacimiento"]) && !empty($_POST["nacimiento"]) && isset($_POST["genero"]) && !empty($_POST["genero"]) 
    && isset($_POST["diagnostico"]) && !empty($_POST["diagnostico"]) 
    && isset($_POST["lesion"]) && !empty($_POST["lesion"]) && isset($_POST["ingreso"]) && !empty($_POST["ingreso"]))
    {
        insertPatient($nombre,$apellidoP,$apellidoM, $domicilio, $telefono, $fechaNacimiento,$genero, $diagnostico, $lesion, $ingreso, $dependencia, $correo, $municipio, $estado); 
    }
    else
    {
        echo '<script>alert("Porfavor llena todos los campos!!");</script>';

    }
    
  

?>