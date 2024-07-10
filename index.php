

<?php
	include("consultas.php");
	$idcliente = "-";//Se da el valor cliente, para que cuando ingrese el cliente cambie la barra de navegación
	if (isset($_GET["xsftr412"])){
		$idcliente = $_GET["xsftr412"];
	}

	$textofinal = "xsftr412=".$idcliente."&".random();

	$nombre = "-";

	if(isset($_POST["null"])){
		echo "<script language='javascript'>
				alert('Inicie sesión por favor');
				document.location.href='index.php';
			</script>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Configurado al español -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>MODA FESC | INICIO</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">

	<!--  NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<?php
			if ($idcliente == "-"){	
  				echo "<a class='navbar-brand' href='index.php'>";
  			} else {
  				echo "<a class='navbar-brand' href='index.php?".$textofinal."'>";
  			};
  		?>
    		<img src="imagenes\logo.png" alt="Logo" width="30%" height="30%">
  		</a>
  		<form class="form-inline my-2 my-lg-0 mx-auto">
  		</form>
  		<ul class="navbar-nav" style="margin-right:10px;">
    		<li class="nav-item">
    			<?php
    				if ($idcliente == "-"){
      					echo "<a class='nav-link btn btn-outline-light my-2 my-sm-0 text-white bg-dark' href='cuenta.php'>Iniciar sesión</a>";
			echo "</li>";
		echo "</ul>";
		echo "<button onclick='sesion(2)' class='btn btn-outline-light my-2 my-sm-0' type='submit'>
			<img src='imagenes\cCompras.png' class='rounded float-end' width='20' height='20'>
		</button>";		
      				} else {
      					echo "<div class='dropdown' style='margin-right: 50px;'>";
							echo "<button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
								echo "Cuenta";
							echo "</button>";
							echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
								echo "<a class='dropdown-item' onclick='recargar()' href='#'>¡Hola! ";
								mostrarNombre($idcliente,$textofinal);
								echo "</a>";
								echo "<a class='dropdown-item' href='pedidos.php?".$textofinal."'>Pedidos</a>";
								echo "<a class='dropdown-item' href='index.php' onclick='sesion(1)'>Cerrar Sesión</a>";
							echo "</div>";	
						echo "</div>";
			echo "</li>";
		echo "</ul>";
		echo "<a href='carrito.php?".$textofinal."' class='btn btn-outline-light my-2 my-sm-0' type='submit'>
			<img src='imagenes\cCompras.png' class='rounded float-end' width='20' height='20'>
		</a>";	
      				}
      			?>
  		
	</nav>
	<!-- FIN NAVBAR -->


	<!-- CAROUSEL -->
	<div id="carousel1" class="carousel slide" data-ride="carousel">
	  	<div class="carousel-inner">
	    	<div class="carousel-item active">
	      		<img class="d-block w-100" src="imagenes\carousel1.1.png" alt="First slide">
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100" src="imagenes\carousel1.2.png" alt="Second slide">
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100" src="imagenes\carousel1.3.png" alt="Third slide">
	    	</div>
	  	</div>
	  	<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
	    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  	<a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</a>
	</div>
	<!-- FIN CAROUSEL -->

	<!-- CATALOGO -->

	<div class='container' style='margin-top: 25px;'>
		<div class='row'>

	<?php

		catalogo($idcliente,$textofinal);

	?>

	    </div>
	</div>
	

	<!-- FIN CATALOGO -->

	<script src="app.js" type="text/javascript"></script>
	
	<!-- FOOTER -->
	<div class="container">
	  <footer class="py-3 my-4">
	    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
	    	<?php
	      	
	      	if ($idcliente == "-"){
		      	echo "<li class='nav-item'><a href='index.php' class='nav-link px-2 text-muted'>Inicio</a></li>";
		      	echo "<li class='nav-item'><a href='terminos-y-condiciones.php' class='nav-link px-2 text-muted'>Terminos y condiciones</a></li>";
		      	echo "<li class='nav-item'><a href='aviso-de-privacidad.php' class='nav-link px-2 text-muted'>Aviso de privacidad</a></li>";
		      	echo "<li class='nav-item'><a href='faqs.php' class='nav-link px-2 text-muted'>FAQs</a></li>";
		      	echo "<li class='nav-item'><a href='about.php' class='nav-link px-2 text-muted'>About</a></li>";
		      } else {
		      	echo "<li class='nav-item'><a href='index.php?".$textofinal."' class='nav-link px-2 text-muted'>Inicio</a></li>";
		      	echo "<li class='nav-item'><a href='terminos-y-condiciones.php?".$textofinal."' class='nav-link px-2 text-muted'>Terminos y condiciones</a></li>";
		      	echo "<li class='nav-item'><a href='aviso-de-privacidad.php?".$textofinal."' class='nav-link px-2 text-muted'>Aviso de privacidad</a></li>";
		      	echo "<li class='nav-item'><a href='faqs.php?".$textofinal."' class='nav-link px-2 text-muted'>FAQs</a></li>";
		      	echo "<li class='nav-item'><a href='about.php?".$textofinal."' class='nav-link px-2 text-muted'>About</a></li>";		      	
		      }
	      	
	      	?>
	    </ul>
	    <p class="text-center text-muted">&copy; 2023 ModaFESC de C.V.</p>
	  </footer>
	</div>
	<!-- FIN FOOTER -->

</body>
</html>


