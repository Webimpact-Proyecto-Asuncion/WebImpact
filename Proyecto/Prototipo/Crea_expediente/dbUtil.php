<?php
    function connectDB(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="paciente";

        $connection=mysqli_connect($servername,$username,$password,$dbname);
        if(!$connection){
            die("Connection failed: ".mysqli_connect_error());
        }
        return $connection;
    }
    //close conection
    function  disconnectDB($mysql){
        mysqli_close($mysql);
    }

    function crearPaciente($nombre, $apellidoP, $apellidoM, $nacimiento, $genero, $correo, $domicilio, $estado, $municipio, $diagnostico, $lesion, $ingreso, $telefono)
    {
        $lastPaciente = 99;
        $lastPaciente = 100;
        $lastPaciente++;  

        $conn = connectDB(); 

        $sql = "INSERT INTO creapaciente (NumeroPaciente, NombrePaciente, ApellidoPaterno, ApellidoMaterno, Domicilio, Telefono, FechaNacimiennto, Genero, Diagnostico, Lesion, Ingreso) VALUES (\"". $lastPaciente . "\",\"" . $nombre . "\",\"" . $apellidoP. "\",\"" . $apellidoM . "\",\"" . $domicilio . "\",\"" . $telefono . "\",\"" . $nacimiento . "\",\"" . $genero . "\",\"" . $diagnostico . "\",\"" . $lesion . "\",\"" . $ingreso . "\")";

       
        
        if(mysqli_query($conn,$sql))
        {
            echo "Paciente creado exitosamente!!"; 
            disconnectDB($conn);  
            return true;
        }      
        else
        {
            echo "ERROR al crear paciente!!"; 
            disconnectDB($conn); 
            return false; 
        }
    }

    function getPaciente()
    {
        $conn = connectDb();
        $sql = "SELECT NumeroPaciente,NombrePaciente,ApellidoPaterno, ApellidoMaterno, Domicilio, Telefono, FechaNacimiento, Genero, Diagnostico, Lesion, Ingreso FROM creapaciente";
        $result = mysqli_query($conn, $sql);

        disconnectDB($conn);

        return $result;
    }
?>
