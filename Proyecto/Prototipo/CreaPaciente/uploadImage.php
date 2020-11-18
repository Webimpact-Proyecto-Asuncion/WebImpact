<?php

include("util.php"); 


$lastPaciente = queryLastPaciente();
$lastPaciente += 1;


if(isset($_FILES['file']['name'])){


    /* Getting file name */
    $filename = $_FILES['file']['name'];
    
 
    /* Location */
    $location = "./imagenes/".$filename;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);
 
    /* Valid extensions */
    $valid_extensions = array("jpg","jpeg","png");
 
    $response = 0;
    /* Check file extension */
    if(in_array(strtolower($imageFileType), $valid_extensions)) {
        
       /* Upload file */
       if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
          $response = $location;
       }
    }
    rename($location,"./imagenes/".$lastPaciente.".".$imageFileType);
    $response = "./imagenes/".$lastPaciente.".".$imageFileType;
    echo $response;
    exit;
 }

?>


