	<!-- Configurado al español -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php
	include("consultas.php");
	$idcliente = "-";//Se da el valor cliente, para que cuando ingrese el cliente cambie la barra de navegación
	if (isset($_GET["xsftr412"])){
		$idcliente = $_GET["xsftr412"];
	}

	$producto = "-";//Se da el valor del producto
	if (isset($_GET["producto"])){
		$producto = $_GET["producto"];
	}

	$textofinal = "xsftr412=".$idcliente."&".random();



	if(isset($_POST["carrito"])){ /*Si se aprieta el boton del formulario de comprar, se recuperan los valores de cada input del formulario por su name respectivo*/
		$cantidad = $_REQUEST["cantidad"];
		$id = $_REQUEST["idproducto"];
		agregarC($idcliente,$id,$cantidad,$textofinal);
		
	}

	$talla = "Chica";
	$precio = "149.00";
	$idproducto = "0".$producto."S";

	if(isset($_POST["null"])){
		echo "<script language='javascript'>
				alert('Inicie sesión por favor');
    			window.location.href='cuenta.php';
			</script>";
	}




	if(isset($_POST["boton"])){ /*Si se aprieta el boton del formulario de las tallas, se recuperan el valor del boton para cambiar los datos del producto*/
		$talla = $_REQUEST['boton'];
		switch ($talla) {
		case 'Chica':
			$precio = "149.00";
			$idproducto = "0".$producto."S";
			break;
		case 'Mediana':
			$precio = "199.00";
			$idproducto = "0".$producto."M";
			break;
		case 'Grande':
			$precio = "249.00";
			$idproducto = "0".$producto."L";
			break;
		case 'Extra Grande':
			$precio = "299.00";
			$idproducto = "0".$producto."X";
			break;
		}
	}



?>

<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>MODA FESC | PRODUCTO <?php echo $producto;?></title>
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

	<!-- PRODUCTO -->

	<div class='row d-flex align-items-center justify-content-center' style='margin: 25px;'>

    	<div class='col-md-3'></div>

	<?php

		echo "<div class='col-md-3 justify-content-center'>
      		<div class='card text-white bg-dark mb-4 text-center'>
	        	<img class='card-img-top' onmouseout=this.src='catalogo/0".$producto.".png'; onmouseover=this.src='catalogo/0".$producto."T.png'; src='catalogo/0".$producto.".png' alt='Playera ".$producto."'>
	       		<div class='card-body'>
	       			<h5 class='card-title'>";
	       			nPlayera($idproducto);
	       			echo "</h5>
	       		</div>
	        </div>
    	</div>
    	<div class='col-md-3'>
      		<div style='margin:25px' class='m-0 row justify-content-center'>
				<form method='POST' id='form' class='text-center'>
					<input type='hidden' name='cmd' value='_xclick'>
					<input type='hidden' name='business' value='shoksito22@gmail.com'>
					<input type='hidden' name='lc' value='MX'>
					<input type='hidden' name='item_name' value='";
					nPlayera($idproducto);
					echo "'>
					<input type='hidden' name='amount' value='".$precio."'>
					<input type='hidden' name='currency_code' value='MXN'>
					<input type='hidden' name='button_subtype' value='services'>
					<input type='hidden' name='no_note' value='0'>
					<input type='hidden' name='bn' value='PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest'>
					<div class='form-group'>
				      	<h1>MXN $".$precio."</h1>
				      	<input type='hidden' name='precio' value='".$precio."'>
				      	<input type='hidden' name='idproducto' value='".$idproducto."'>
				      	<input type='hidden' name='nombre' value='";
				      	nPlayera($idproducto);
				      	echo "'>
				    </div>
				    <div class='form-group'>
				      	<label for='email'>Talla: ".$talla."</label>
				    </div>
				    <div class='form-group'>
					    <button type='submit' name='boton' class='btn btn-primary btn-sm' value='Chica'>Chica</button>
						<button type='submit' name='boton' class='btn btn-primary btn-sm' value='Mediana'>Mediana</button>
						<button type='submit' name='boton' class='btn btn-primary btn-sm' value='Grande'>Grande</button>
						<button type='submit' name='boton' class='btn btn-primary btn-sm' value='Extra Grande'>Extra Grande</button>
					</div>
					<div class='form-group'>
				    	<p><strong>**NOTA**</strong></p>
				    	<p>Recuerda que antes de pagar debes tener cuenta en paypal</p>
				    	<p>Si deseas más de un producto, solo podrás agregarlos al carrito</p>
				    </div>
				    <div class='form-group'>
				    	<label for='cantidad'>Cantidad:</label>";
						cantidad($idproducto);
				    echo "</div>";
				    if ($idcliente == "-"){
			        	echo "<button href='#' type='submit' name='null' class='btn btn-primary mr-2'>Agregar al carrito</button>";
			        	echo "<button href='#' type='submit' name='null' class='btn btn-primary mr-2'>Pagar</button>";
			        	} else {
				        	echo "<button id='miBoton' onclick='post()' class='btn btn-primary mr-2'>Agregar al carrito</button>";
				        	echo "<button id='comprar' onclick='compra()' class='btn btn-primary mr-2'>Comprar</button>";
				        }
				echo "</form>
      		</div>
    	</div>

    	<div class='col-md-3'></div>

	</div>";

	
	
	?>

	<!-- FIN PRODUCTO -->

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









