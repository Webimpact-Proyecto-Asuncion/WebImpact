SELECT * FROM Pacientes

CREATE TABLE NuevoPaciente
(
	Nombre varchar(50),
	ApellidoP varchar(50),
	ApellidoM varchar(50),
	FechaDeNacimiento date,
	Genero varchar(20), 
	Correo varchar(50),
	Domicilio varchar(100),
	Estado int,
	Municipio int,
	Diagnostico varchar(100),
	Lesion varchar (50),
	Ingreso date,
	Telefono varchar (10)
)

DROP TABLE NuevoPaciente



IF EXISTS (SELECT name FROM sysobjects WHERE name='CrearPaciente' AND type='P')
DROP PROCEDURE CrearPaciente
GO

CREATE PROCEDURE CrearPaciente
	@NumeroPaciente varchar(50),
	@NombrePaciente varchar(50),
	@ApellidoPaterno varchar(50),
	@ApellidoMaterno varchar(20),
	@Domicilio varchar(100),
	@Telefono varchar(100),
	@FechaNacimiento varchar(100),
	@Genero varchar(100),
	@Diagnostico varchar(100), 
	@Lesion varchar(100), 
	@Ingreso date,
	@Estado int, 
	@Municipio int
	AS 
	INSERT INTO NuevoPaciente VALUES (@NumeroPaciente, @NombrePaciente, @ApellidoPaterno ,@ApellidoMaterno, @Domicilio, @Telefono, @FechaNacimiento, @Genero, @Diagnostico, @Lesion, @Ingreso) 
	GO
	