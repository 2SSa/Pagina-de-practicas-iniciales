<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>Nuevo Vendedor</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<meta charset="utf-8">
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


		<div class="row">
  			<div class="col-md-4"><h3>Datos del vendedor</h3></div>  			
  			<div class="col-md-4"></div>							
		</div>
		
		<?php 
		$edita = null;
		$edita = $_GET['idVendedor'];
		
		
			if($edita == null){
				echo "
				<form action=\"accionesV.php\" method=\"POST\">

  			<div class=\"row\">
  				<div class=\"col-md-2\">
  				</div>
				<div class=\"col-xs-12 col-md-8\">
					<div class=\"form-group\">
    				<label for=\"exampleFormControlInput1\">Nombre</label>
    				<input type=\"text\" class=\"form-control form-control-lg\" id=\"nombre\" placeholder=\"Nombre del vendedor\" name=\"nombre\" required=\"\">
  					</div>
				</div>				
			</div>

			<div class=\"row\">
  				<div class=\"col-md-2\">
  				</div>
				<div class=\"col-xs-12 col-md-8\">
					<div class=\"form-group\">
    				<label for=\"exampleFormControlInput2\">Telefono</label>
    				<input type=\"text\" class=\"form-control form-control-lg\" id=\"telefono\" placeholder=\"Telefono Personal\" name=\"telefono\" required=\"\">
  					</div>
				</div>				
			</div>
			<div class=\"row\">    
    			    <div class=\"col-md-5\">    						
    				</div>			
    				<div class=\"col-md-2\">    						
    					<input type=\"submit\" value=\"Enviar\" name=\"\" class=\"btn btn-primary btn-lg\">    		
    				</div>	    					
    			</div>
    			</form>
			
			";

			}else{
				$id = $_GET['idVendedor'];
				$nombre = $_GET['Nombre'];
				$telefono = $_GET['Telefono'];
				echo "
				<form action=\"accionesV.php\" method=\"POST\">
				<div class=\"row\">
  				<div class=\"col-md-2\">
  				</div>
				<div class=\"col-xs-12 col-md-8\">
					<div class=\"form-group\">
    				<label for=\"exampleFormControlInput1\">Codigo</label>
				<input type=\"text\" class=\"form-control form-control-lg\" id=\"idVendedor\" name=\"idVendedor\" required=\"\" readonly=\"readonly\" value=\"$id\">
  					</div>
				</div>				
			</div>
			  
			
				<div class=\"row\">
  				<div class=\"col-md-2\">
  				</div>
				<div class=\"col-xs-12 col-md-8\">
					<div class=\"form-group\">
    				<label for=\"exampleFormControlInput1\">Nombre</label>
    				<input type=\"text\" class=\"form-control form-control-lg\" id=\"nombre\" placeholder=\"nombre del producto\" name=\"nombre\" required=\"\" value=\"$nombre\">
  					</div>
				</div>				
			</div>

			<div class=\"row\">
  				<div class=\"col-md-2\">
  				</div>
				<div class=\"col-xs-12 col-md-8\">
					<div class=\"form-group\">
    				<label for=\"exampleFormControlInput2\">Precio</label>
    				<input type=\"text\" class=\"form-control form-control-lg\" id=\"telefono\" placeholder=\"Precio del producto\" name=\"telefono\" required=\"\" value=\"$telefono\">
  					</div>
				</div>				
			</div>

			<div class=\"row\">    
    			    <div class=\"col-md-5\">    						
    				</div>			
    				<div class=\"col-md-2\">    						
    					<input type=\"submit\" value=\"Actualizar\" name=\"\" class=\"btn btn-primary btn-lg\">    		
    				</div>	    					
    			</div>
    			</form>
			
			";
			}
		
		
		?>
</div>		
	</body>
	</html>