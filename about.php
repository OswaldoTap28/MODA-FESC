<?php

	include("consultas.php");
	$idcliente = "-";//Se da el valor cliente, para que cuando ingrese el cliente cambie la barra de navegación
	if (isset($_GET["xsftr412"])){
		$idcliente = $_GET["xsftr412"];
	}

	$textofinal = "xsftr412=".$idcliente."&".random();

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
	<title>MODA FESC | ACERCA DE NOSOTROS</title>

	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}

		body{
			background: #fefefe;
		}

		.container{
			width: 90%;
			margin: 50px auto;
		}

		.heading{
			text-align: center;
			font-size: 30px;
			margin-bottom: 50px;
		}

		.row{
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			flex-flow: wrap;
		}

		.card{
			width: 20%;
			background: #fff;
			border: 1px solid #ccc;
			margin-bottom: 50px;
			transition: 0.3s;
		}

		.card-header{
			text-align: center;
			padding: 50px 10px;
			background: linear-gradient(to right, #168984, #16894e);
			color: #fff;
		}

		.card-body{
			padding: 30px 20px;
			text-align: center;
			font-size: 18px;
			color: #000000;
		}

		.card:hover{
			transform: scale(1.05);
			box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
		}

	</style>
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

<div class="container">
	<div class="heading">
		<h1>CONTACTO MODAFESC</h1>
	</div>
</div>

<div class="row">

	<div class="card">
		<div class="card-header">
			<h1>Misión</h1>
		</div>
		<div class="card-body">
			<p>
				Ofrecer variedad de prendas de vestir con una alta calidad de diseño para satisfacer las expectativas de nuestros clientes.
			</p>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<h1>Visión</h1>
		</div>
		<div class="card-body">
			<p>
				Ser líderes regionales en la venta y distribución de prendas de vestir.
			</p>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<h1>Contacto</h1>
		</div>
		<div class="card-body">
			<p>
				Correo: <br>contacto@modafesc.com
				Teléfono: <br>5546853792 
			</p>
		</div>
	</div>
</div>

<center>
<h3>UBICACI&Oacute;N: <br>Roma Nte., 06700 Ciudad de M&eacute;xico, CDMX<br> </h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.689377842314!2d-99.16506491761682!3d19.42288045609289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff3702c3f781%3A0x4e7203213acc7b60!2sRoma%20Nte.%2C%2006700%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1639720748739!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</center>

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