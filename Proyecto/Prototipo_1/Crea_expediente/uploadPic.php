<?php
    
    require_once('dbUtil.php'); 
    include('CreaPaciente.html'); 



    
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


    function crearPaciente($nombre, $apellidoP, $apellidoM, $nacimiento, $genero, $correo, $domicilio, $estado, $municipio, $diagnostico, $lesion, $ingreso, $telefono)
    {
<<<<<<< HEAD
        $lastPaciente = 99;
=======
        $lastPaciente = 100;
>>>>>>> 178c915a22f404ffe7c24d7b9e474d72d1173c75
        $lastPaciente++;  

        $conn = connectDB(); 

        $sql = "INSERT INTO nuevopaciente(`NumeroPaciente`, `NombrePaciente`, `ApellidoPaterno`, `ApellidoMaterno`, `Domicilio`, `Telefono`, `FechaNacimiennto`, `Genero`, `Diagnostico`, `Lesion`, `Ingreso`) VALUES ((\"". $lastPaciente . "\",\"" . $nombre . "\",\"" . $apellidoP. "\",\"" . $apellidoM . "\",\"" . $domicilio . "\",\"" . $telefono . "\",\"" . $nacimiento . "\",\"" . $genero . "\",\"" . $diagnostico . "\",\"" . $lesion . "\",\"" . $ingreso . "\")";

<<<<<<< HEAD
        
        if(mysqli_query($conn,$sql))
        {
            echo "Paciente creado exitosamente!!"; 
            disconnectDB($conn);  
            return true;      
=======
        if(mysqli_query($conn,$sql))
        {
            echo "Paciente creado exitosamente!!"; 
            disconnectDB($conn); 
            return(true);       
>>>>>>> 178c915a22f404ffe7c24d7b9e474d72d1173c75
        }
        else
        {
            echo "ERROR al crear paciente!!"; 
            disconnectDB($conn); 
            return false; 
        }

        
    }

   


    $nombre = $_POST["nombre"]; 
    $apellidoP = $_POST["apellidoP"]; 
    $apellidoM = $_POST["apellidoM"]; 
    $nacimiento = $_POST["nacimiento"]; 
    $genero = $_POST["genero"]; 
    $correo = $_POST["correo"]; 
    //$ocupacion = $_POST["ocupacion"]; 
    //$escolaridad = $_POST["escolaridad"]; 
    $domicilio = $_POST["domicilio"]; 
    $estado = $_POST["estado"]; 
    $municipio = $_POST["municipio"]; 
    //$empresa = $_POST["empresa"]; 
    //$jubilado = $_POST["jubilado"]; 
    $diagnostico = $_POST["diagnostico"]; 
    $lesion = $_POST["lesion"]; 
    $ingreso = $_POST["ingreso"]; 
    $telefono = $_POST["tel"];
    //$dependencia = $_POST["dependencia"]; 

    echo "NOMBRE: ".$nombre. "\n";
    echo "Apellido P: ". $apellidoP. "\n"; 
    echo "Apellido M: " . $apellidoM ."\n";
    echo "Fecha de nacimiento: " . $nacimiento. "\n";
    echo "Genero: " . $nacimiento . "\n"; 
    echo "Correo: " . $correo . "\n"; 
    echo "Domicilio: " . $domicilio . "\n"; 
    echo "Estado: " . $estado . "\n"; 
    echo "Municipio: " . $municipio . "\n";
    echo "diagnostico: " . $diagnostico . "\n"; 
    echo "lesion: " . $lesion . "\n"; 
    echo "Ingreso: " . $ingreso . "\n"; 
    echo "telefono: " . $telefono . "\n";


    //files
    $foto = $_POST["foto"]; 
    $curp = $_POST["curp"]; 
    $acta = $_POST["acta"]; 
    $comprobante = $_POST["comprobante"]; 
    $expediente = $_POST["expediente"]; 
    $recomendacion = $_POST["recomendacion"];

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["apellidoP"]) && !empty($_POST["apellidoP"]) && isset($_POST["apellidoM"]) 
    && !empty($_POST["apellidoM"]) && isset($_POST["nacimiento"]) && !empty($_POST["nacimiento"]) && isset($_POST["genero"]) && !empty($_POST["genero"]) 
    && isset($_POST["domicilio"]) && !empty($_POST["domicilio"]) && isset($_POST["estado"]) 
    && !empty($_POST["estado"]) && isset($_POST["municipio"]) && !empty($_POST["municipio"]) && isset($_POST["diagnostico"]) && !empty($_POST["diagnostico"]) 
    && isset($_POST["lesion"]) && !empty($_POST["lesion"]) && isset($_POST["ingreso"]) && !empty($_POST["ingreso"]))
    {
        crearPaciente($nombre, $apellidoP, $apellidoM, $nacimiento, $genero, $correo, $domicilio, $estado, $municipio, $diagnostico, $lesion, $ingreso,$telefono); 
    }
    else
    {
        echo "ERROR NO SE HIZO NADA!!";
    }




?>