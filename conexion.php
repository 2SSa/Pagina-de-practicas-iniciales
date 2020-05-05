<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$servidor = "localhost:3307";    // sera el valor de nuestra BD 
	$basededatos = "practicas";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	//Lista de Tablas
    $vendedor = "vendedor"; 	   
    $producto = "producto"; 	   
    
	error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($servidor,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}
?>