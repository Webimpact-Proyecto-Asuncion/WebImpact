<?php

    function connectDb()
    {
        $servername = "35.193.95.221"; 
        $username = "WITEAM"; 
        $password = "WebImpact$2020"; 
        $dbname = "asuncion"; 

        $conn = mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn)
        {
            die("Connection failed: " . mysqli_connect_error()); 
        }

        return $conn;

    }

    function closeDb($mysql)
    {
        mysqli_close($mysql); 
    }

    function getPatient()
    {
        $conn = connectDb(); 
        $sql = "SELECT NumeroPaciente, NombrePaciente, ApellidoPaterno, ApellidoMaterno, Domicilio, Telefono, FechaNacimiento, Genero, Diagnostico, Lesion, Ingreso, Dependencia, Correo, Municipio, Estado FROM pacientes";
        $result = mysqli_query($conn, $sql); 

        closeDb($conn); 
        return $result; 

    }

    function insertPatient($numero,$nombre,$apellidoP,$apellidoM, $domicilio, $telefono, $fechaNacimiento,$genero, $diagnostico, $lesion, $ingreso, $dependencia, $correo, $municipio, $estado)
    {
        
        $conn = connectDb(); 

        $sql = "INSERT INTO Pacientes (NumeroPaciente, NombrePaciente, ApellidoPaterno, ApellidoMaterno, Domicilio, Telefono, FechaNacimiento, Genero, Diagnostico, Lesion, Ingreso, Dependencia, Correo, Municipio, Estado) VALUES (\"". $numero . "\",\"" . $nombre . "\",\"" . $apellidoP. "\",\"" . $apellidoM . "\",\"" . $domicilio . "\",\"" . $telefono . "\",\"" . $fechaNacimiento . "\",\"" . $genero . "\",\"" . $diagnostico . "\",\"" . $lesion . "\",\"" . $ingreso . "\",\"" . $dependencia . "\",\"" . $correo .  "\",\"" . $municipio  .  "\",\"" . $estado . "\")";  

        //$sql = "EXECUTE creaPaciente $numero . ':' . $nombre . ':' . $apellidoP . ':' . $apellidoM . ':' . $domicilio . ':' . $telefono . ':' . $fechaNacimiento . ':' . $genero . ':' . $diagnostico . ':' . $lesion . ':' . $ingreso . ':' . ':' . $dependencia . ':' . $correo . ':' . $municipio . ':' . $estado . ':' . $foto . ':' . $curp . ':' . $acta . ':' . $comprobante . ':' . ':' . $recomendacion";
        

    
        if(mysqli_query($conn, $sql))
        {
            echo '<script>alert("Nuevo paciente creado exitosamente!");</script>';
            closeDb($conn);
            return true; 

        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
            closeDb($conn); 
            return false; 
        }

        closeDb($conn); 
    }
    

?>