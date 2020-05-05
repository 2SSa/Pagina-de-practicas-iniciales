<?php
	
	require_once "conexion.php";

	$nombreVendedor = $_POST['nombre'];
    $telefonoVendedor = $_POST['telefono'];
    
    $idVendedor = $_GET['idVendedor'];
    $id = $_POST['idVendedor'];
    $identificador = $_GET['identificador'];

    
    
	if($nombreVendedor != null && $telefonoVendedor != null && $id != null){
        $query = "UPDATE $vendedor SET Nombre = '$nombreVendedor', Telefono = '$telefonoVendedor' WHERE Codigo = '$id'";

	    if($conexion->query($query)){
		    header("Location: Vendedor.php");

	    }else{
		    echo "Ocurrio un error";
	    }
    }
	else if($nombreVendedor != null && $telefonoVendedor != null){
        
        $query = "INSERT INTO $vendedor(Nombre, Telefono) VALUES('$nombreVendedor', '$telefonoVendedor')";

	    if($conexion->query($query)){
            header("Location: Vendedor.php");

	    }else{
		    echo "Ocurrio un error";
	    }
    }
    //Método para traer datos
    if( $idVendedor != null){
        $resultado=mysqli_query($conexion,"SELECT* FROM $vendedor WHERE Codigo = $idVendedor");

        for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
            $resultado->data_seek($num_fila);
            $fila = $resultado->fetch_assoc();
        }

        header("Location: CrearVendedor.php?idVendedor=$fila[Codigo]&Nombre=$fila[Nombre]&Telefono=$fila[Telefono]");
    }

    if($identificador !=null){
        $query = "DELETE FROM $vendedor WHERE Codigo ='$identificador'" ;

	    if($conexion->query($query)){
            header("Location: Vendedor.php");

	    }else{
		    echo "Ocurrio un error";
	    }
    }

?>