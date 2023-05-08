<?php	
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "formulario";

	//Establecer una conexión a la base de datos
    $conexion = new mysqli($servidor, $usuario, $password, $basededatos);

	// Verificar si la conexión fue exitosa
    if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }
?>