<?php

    function connectDb()
    {
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "asuncion1"; 

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

    function insertPatient($nombre,$apellidoP,$apellidoM, $domicilio, $municipio, $estado, $telefono, $correo, $fechaNacimiento,$genero, $diagnostico, $lesion, $ingreso, $dependencia, $estudioSE)
    {
        
        $conn = connectDb(); 

        $sql = "INSERT INTO Paciente (NombrePaciente, ApellidoPaterno, ApellidoMaterno, Domicilio, Municipio, Estado, Telefono, Correo, FechaNacimiento, Genero, Diagnostico, Lesion, Ingreso, Dependencia, Fotografia) VALUES (\"" . $nombre . "\",\"" . $apellidoP. "\",\"" . $apellidoM . "\",\"" . $domicilio . "\",\"" . $municipio  .  "\",\"" . $estado . "\",\"" . $telefono . "\",\"" . $correo . "\",\"" . $fechaNacimiento . "\",\"" . $genero . "\",\"" . $diagnostico . "\",\"" . $lesion . "\",\"" . $ingreso . "\",\"" . $dependencia . "\",\"" . $estudioSE .  "\")";  

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

    function queryLastPaciente()
    {
        $conn = connectDb();

        $query = "SELECT NumeroPaciente FROM Paciente ORDER BY NumeroPaciente DESC LIMIT 1";

        $result = mysqli_query($conn, $query);

        closeDb($conn); 

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result); 
            
        }
        return $row['NumeroPaciente'];

    }

    


    

?>