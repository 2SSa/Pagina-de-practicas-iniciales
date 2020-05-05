<?php
	
	require_once "conexion.php";

	$nombreProducto = $_POST['nombre'];
    $precioProducto = $_POST['precio'];
    $idProducto = $_GET['idProducto'];
    $id = $_POST['idProducto'];
    $identificador = $_GET['identificador'];

    
    
	if($nombreProducto != null && $precioProducto != null && $id != null){
        $query = "UPDATE $producto SET Nombre = '$nombreProducto', Precio = '$precioProducto' WHERE idProducto = '$id'";

	    if($conexion->query($query)){
		    echo "Datos Guardados";
		    header("Location: Producto.php");

	    }else{
		    echo "Ocurrio un error";
	    }
    }
	else if($nombreProducto != null && $precioProducto != null){
        
        $query = "INSERT INTO $producto(Nombre, Precio) VALUES('$nombreProducto', '$precioProducto')";

	    if($conexion->query($query)){
            header("Location: Producto.php");

	    }else{
		    echo "Ocurrio un error";
	    }
    }
    if( $idProducto != null){
        $resultado=mysqli_query($conexion,"SELECT* FROM $producto WHERE idProducto = $idProducto");

        for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
            $resultado->data_seek($num_fila);
            $fila = $resultado->fetch_assoc();
        }

        header("Location: CrearProducto.php?idProducto=$fila[idProducto]&Nombre=$fila[Nombre]&Precio=$fila[Precio]");
    }

    if($identificador !=null){
        $query = "DELETE FROM $producto WHERE idProducto ='$identificador'" ;

	    if($conexion->query($query)){
            header("Location: Producto.php");

	    }else{
		    echo "Ocurrio un error";
	    }
    }

?>