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
	<title>MODA FESC | AVISO DE PRIVACIDAD</title>
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


<div class="acordeon-cuerpo">
  <div class="acordeon">
    <h1>Aviso de privacidad</h1>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">General</div>
      <div class="contenido">
      <p>En cumplimiento con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP) y su reglamento, MODA FESC es el responsable de recabar tus datos personales, del uso que se le dé a los mismos y de su protección.<br>En MODA FESC, valoramos y respetamos tu privacidad. Este aviso de privacidad tiene como objetivo informarte sobre cómo recopilamos, utilizamos, protegemos y divulgamos la información personal que nos proporcionas cuando utilizas nuestros servicios.</p>
<p>Si tiene alguna pregunta sobre este Aviso de Privacidad puede ponerse en contacto con nosotros en cualquier momento a través de [correo] o de nuestras diferentes formas de contacto.
</p></div>
    </div>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">Datos Personales Recopilados:</div>
      <div class="contenido">Para brindarte nuestros servicios, podemos recopilar la siguiente información personal:
        <ol type="i" start="1">
          <li>Nombre completo.</li>
          <li>Dirección de correo electrónico.</li>
          <li>Número de teléfono.</li>
        </ol></div>
    </div>
  <hr>
	  <div class="contenedor">
      <div class="etiqueta">Finalidad del Tratamiento de los Datos Personales</div>
      <div class="contenido">La información personal recopilada tiene como finalidad:
        <ol type="i" start="1">
         	<li>Procesar y completar tus pedidos y transacciones.</li>
			<li>Mantener una comunicación efectiva contigo, incluyendo el envío de confirmaciones, actualizaciones y notificaciones relacionadas con nuestros servicios.</li>
			<li>Brindar atención al cliente y soporte técnico.</li>
			<li>Personalizar y mejorar tu experiencia en nuestro sitio web y aplicaciones.</li>
			<li>Enviar información promocional sobre nuestros productos y servicios, siempre y cuando hayas dado tu consentimiento para recibir dichas comunicaciones.</li>
			<li>Cumplir con nuestras obligaciones legales y proteger nuestros derechos legales.</li>
        </ol></div>
    </div>
  <hr>
	  <div class="contenedor">
      <div class="etiqueta">Transferencia de Datos Personales:</div>
      <div class="contenido">
      <p>MODA FESC podrá transferir tus datos personales a terceros únicamente cuando sea necesario para cumplir con los fines descritos anteriormente y siempre que exista un fundamento legal para dicha transferencia.</p>
	</div>
    </div>
    <hr>
	  <div class="contenedor">
      <div class="etiqueta">Medidas de Seguridad:</div>
      <div class="contenido">
      <p>MODA FESC cuenta con medidas de seguridad administrativas, técnicas y físicas para proteger tus datos personales y evitar su pérdida, uso indebido, acceso no autorizado, divulgación o alteración. Estas medidas se actualizan y mejoran de manera constante para garantizar la confidencialidad y seguridad de tus datos.
</p></div>
    </div>
    <hr>
	  <div class="contenedor">
      <div class="etiqueta">Derechos ARCO:</div>
      <div class="contenido">
      <p>Como titular de los datos personales, tienes derecho a acceder, rectificar, cancelar u oponerte al tratamiento de tus datos personales, así como a revocar el consentimiento otorgado para el tratamiento de los mismos. Para ejercer tus derechos ARCO, puedes enviar una solicitud por escrito a nuestra dirección de correo electrónico [correo electrónico de contacto] o comunicarte con nosotros a través de [número de teléfono de contacto].
</p></div>
    </div>
    <hr>
	  <div class="contenedor">
      <div class="etiqueta">Cambios al Aviso de Privacidad:</div>
      <div class="contenido">
      <p>MODA FESC se reserva el derecho de realizar modificaciones o actualizaciones a este aviso de privacidad para cumplir con nuevas disposiciones legales, políticas internas o requerimientos de las autoridades competentes.
      Nos reservamos el derecho de modificar el Aviso de Privacidad, en cualquier momento y a nuestra entera consideración</p></div>
    </div>
    <hr>
	  <p>Fecha de actualización: 15 de mayo de 2023<br>

Te recomendamos revisar periódicamente este aviso de privacidad para estar informado sobre cómo protegemos y utilizamos tus datos personales.<br>

Agradecemos tu confianza y estamos comprometidos con el manejo adecuado y confidencialidad de tus datos personales.<br>

Atentamente,<br>

MODA FESC</p>



  </div>
  </div>

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