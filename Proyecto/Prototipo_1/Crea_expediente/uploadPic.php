<?php
    
    require_once('dbUtil.php'); 

    
    function clean($entrada)
    {
        return $entrada = htmlspecialchars($entrada); 
    }

    function cleanArr($entradas)
    {
        foreach($entradas as &$variable)
        {
            $variable = clean($variable); 
        }
        return $entradas; 
    }

    $_POST = cleanArr($_POST); 

    function getLastPaciente()
    {
       $conn = connectDB(); 

       $sql = "SELECT NumeroPaciente FROM Pacientes ORDER BY NumeroPaciente ASC";
    }

    function crearPaciente($nombre, $apellidoP, $apellidoM, $nacimiento, $sexo, $correo, $lugarNacimiento, $ocupacion, $escolaridad, $calle, $numeroExt, $numeroInt, 
    $colonia, $estado, $municipio, $empresa, $jubilado, $diagnostico, $lesion, $ingreso, $dependencia)
    {
        $conn = connectDB(); 

        $sql = "INSERT INTO Pacientes (`NumeroPaciente`, `NombrePaciente`, `ApellidoPaterno`, `ApellidoMaterno`, `Domicilio`, `Telefono`, `FechaNacimiennto`, `Genero`, `Diagnostico`, `Lesion`, `Ingreso`) VALUES ((\"". $nombre . "\",\"" . $units . "\",\"" . $quantity . "\",\"" . $price . "\",\"" . $country . "\")" "

        
    }

    //telefono

    $nombre = $_POST["nombre"]; 
    $apellidoP = $_POST["apellidoP"]; 
    $apellidoM = $_POST["apellidoM"]; 
    $nacimiento = $_POST["nacimiento"]; 
    $sexo = $_POST["genero"]; 
    $correo = $_POST["correo"]; 
   // $ocupacion = $_POST["ocupacion"]; 
    //$escolaridad = $_POST["escolaridad"]; 
    $domicilio = $_POST["domicilio"]; 
    $estado = $_POST["estado"]; 
    $municipio = $_POST["municipio"]; 
    //$empresa = $_POST["empresa"]; 
    //$jubilado = $_POST["jubilado"]; 
    $diagnostico = $_POST["diagnostico"]; 
    $lesion = $_POST["lesion"]; 
    $ingreso = $_POST["ingreso"]; 
    //$dependencia = $_POST["dependencia"]; 


    //files
    $foto = $_POST["foto"]; 
    $curp = $_POST["curp"]; 
    $acta = $_POST["acta"]; 
    $comprobante = $_POST["comprobante"]; 
    $expediente = $_POST["expediente"]; 
    $recomendacion = $_POST["recomendacion"];

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["apellidoP"]) && !empty($_POST["apellidoP"]) && isset($_POST["apellidoM"]) 
    && !empty($_POST["apellidoM"]) && isset($_POST["nacimiento"]) && !empty($_POST["nacimiento"]) && isset($_POST["genero"]) && !empty($_POST["genero"]) 
    && isset($_POST["correo"]) && !empty($_POST["correo"]) && isset($_POST["lugarNacimiento"]) && !empty($_POST["lugarNacimiento"]) 
    && isset( $_POST["ocupacion"]) && !empty( $_POST["ocupacion"]) && isset($_POST["domicilio"]) && !empty($_POST["domicilio"]) && isset($_POST["estado"]) 
    && !empty($_POST["estado"]) && isset($_POST["municipio"]) && !empty($_POST["municipio"]) && isset($_POST["diagnostico"]) && !empty($_POST["diagnostico"]) 
    && isset($_POST["lesion"]) && !empty($_POST["lesion"]) && isset($_POST["ingreso"]) && !empty($_POST["ingreso"]))
    {
        
    }




?>