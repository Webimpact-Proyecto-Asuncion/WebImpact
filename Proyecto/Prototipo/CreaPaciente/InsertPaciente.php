<?php

    require_once ('util.php'); 
    session_start();

   
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
    //$municipio = $_POST["municipio"];

/****************IMAGES***********************/
   
    /*$image = $_FILES["estudioSE"]["name"];

    $uploadOK = 1; 
    $aux = explode('.', $image);
    $imageFileType_ES = end($aux);


    if(isset($_FILES["estudioSE"]["name"]) && !empty($_FILES["estudioSE"]["name"]))
    {
      if($imageFileType_ES  != "jpg" && $imageFileType_ES != "png" && $imageFileType_ES != "jpeg")
      {
          echo "El archivo debe ser una fotografía en formato JPG, PNG o JPEG.";
          $uploadOK = 0; 
      }
  
  
      if($uploadOK == 0)
      {
          echo "No se pudo subir la foto."; 
      }
      else
      {
          $estudioSE = img($imageFileType_ES, $_FILES["estudioSE"]["tmp_name"]); 
         
      }
    }
    else
    {
      echo "No hay foto"; 
    }*/

    $target_dir = "imagenes/"; //$target_dir = "uploads/" - specifies the directory where the file is going to be placed
    $target_file = $target_dir.basename($_FILES["estudioSE"]["name"]); //$target_file specifies the path of the file to be uploaded
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //$imageFileType holds the file extension of the file (in lower case)

    //Check if image file is an actual image or a fake image

        $check = getimagesize($_FILES["estudioSE"]["tmp_name"]); 
        if($check !== false)
        {
            echo "<br/>"."File is an image - ".$check["mime"]."."; 
            $uploadOk=1; 
        }
        else
        {
            echo "<br/><br/>"."File is not an image."; 
            $uploadOk=0; 
        }

        //Check if file already exists
        if(file_exists($target_file))
        {
            echo "<br/><br/>"."Sorry, this file already exists."; 
            $uploadOk=0; 
        }

        //Check file size
        if($_FILES["estudioSE"]["size"] > 500000)
        {
            echo "<br/><br/>"."Sorry, your file cannot exceed 500KB"; 
            $uploadOk=0; 
        }

        //Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
        {
            echo "<br/><br/>"."Sorry, file must be JPG, JPEG, PNG or GIF."; 
            $uploadOk=0; 
        }

        //Check if $uploadOk is set to 0 by an error
        if($uploadOk==0)
        {
            echo "<br/><br/>"."Sorry, your file could not be uploaded."; 
        }
        //Check if there was no error and try to upload file
        else
        {
            if(move_uploaded_file($_FILES["estudioSE"]["tmp_name"],$target_file))
            {
                echo "<br/><br/>"."The file ".basename($_FILES["estudioSE"]["name"])." has been uploaded."; 
                
              

            }
            else
            {
                echo "<br/><br/>"."Sorry there was an error uploading your file."; 
            }
        }  exit();

    

  
      
    
    

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["apellidoP"]) && !empty($_POST["apellidoP"]) && isset($_POST["apellidoM"]) 
    && !empty($_POST["apellidoM"]) && isset($_POST["domicilio"]) && !empty($_POST["domicilio"]) && isset($_POST["estado"]) && !empty($_POST["estado"]) && !empty($_POST["tel"]) && isset($_POST["tel"]) && !empty($_POST["correo"]) && isset($_POST["correo"]) && isset($_POST["nacimiento"]) && !empty($_POST["nacimiento"]) && isset($_POST["genero"]) && !empty($_POST["genero"]) 
    && isset($_POST["diagnostico"]) && !empty($_POST["diagnostico"]) && isset($_POST["lesion"]) && !empty($_POST["lesion"]) && isset($_POST["ingreso"]) && !empty($_POST["ingreso"]) && isset($_POST["dependencia"]) && !empty($_POST["dependencia"]))
    {
        insertPatient($nombre,$apellidoP,$apellidoM, $domicilio, $estado, $municipio, $telefono, $correo, $fechaNacimiento,$genero, $diagnostico, $lesion, $ingreso, $dependencia, $estudioSEE); 
    }
    else
    {
        echo '<script>alert("Porfavor llena todos los campos!!");</script>';

    }
    
  

?>