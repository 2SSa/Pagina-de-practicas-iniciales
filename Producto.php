<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#96cf07;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <img src="images/logo.png" alt="Card image cap" width="100 px" height="50 px">
				<a class="navbar-brand">Analysts Next Level</a>
                
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="Producto.php">Productos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
						<a class="nav-link" href="Vendedor.php">Vendedores<span class="sr-only">(current)</span></a>
                    </li>
				</ul>   
			</div>
		</nav>
	</nav>

    <div class="container">
            
    <a href="CrearProducto.php?idProducto=">Crear</a>
            <?php
            include("conexion.php");
            date_default_timezone_set('America/Guatemala');

            echo "<table class='table table-striped'>
                            <thead>
                                <tr>
                                <th scope='col'>Codigo de Producto</th>
                                <th scope='col'>Nombre</th>
                                <th scope='col'>Precio</th>
                                <th scope='col'>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>";
            
                $contenido = "";
                $resultado=mysqli_query($conexion,"SELECT* FROM $producto");

                for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
                    $resultado->data_seek($num_fila);
                    $fila = $resultado->fetch_assoc();

                    $contenido = $contenido."<tr>
                    <td scope='row'>".$fila['idProducto']."</td>
                    <td>".$fila['Nombre']."</td>
                    <td>". $fila['Precio'] ."</td>
                    <td><a href=\"acciones.php?idProducto=".$fila['idProducto']."\">Actualizar</a> | <a href=\"acciones.php?identificador=".$fila['idProducto']."\">Eliminar</a> </td>
                    </tr>";
                    
                }
                echo $contenido;
                

            ?>

            
            
        </tbody>
        </table>

    </div>
</body>
</html>