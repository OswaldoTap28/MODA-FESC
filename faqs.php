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
    <link rel="stylesheet" href="styles.css">
  <title>MODA FESC | PREGUNTAS FRECUENTES</title>
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
    <h1>FAQS</h1>
	<h2>Preguntas Frecuentes Compras</h2>
  <hr>
  <div class="contenedor">
<div class="etiqueta">¿Cómo comprar?</div>
<div class="contenido">
  <p>Ingresa aquí, puedes registrarte en nuestra página para tener un historial de compra.</p>
  <p>Selecciona los artículos de tu preferencia.</p>
  <p>Revisa la disponibilidad de talla (elige la talla que mejor te quede en nuestra guía de medidas).</p>
  <p>Coloca tus datos de envío, es importante que consideres colocar tu dirección completa, puedes guiarte con los datos de tu INE.</p>
  <p>Selecciona el método de pago que más te convenga, revisa formas de pago.</p>
</div>
</div>

<hr>
<div class="contenedor">
<div class="etiqueta">¿Cómo sé qué talla debo comprar?</div>
<div class="contenido">
  <p>Cada uno de nuestros productos tiene una guía de tallas que puedes consultar dentro de la página del artículo seleccionado.</p>
  <p>Nuestros diseños de mujer cuentan con varios fits, el título te mostrará qué fit tiene cada prenda, sus medidas y una pequeña descripción.</p>
</div>
</div>

<hr>
<div class="contenedor">
<div class="etiqueta">¿Es posible modificar mi pedido?</div>
<div class="contenido">
  <p>Podrás cancelar, agregar o cambiar artículos en tu pedido, siempre y cuando no se haya generado la guía de envío. Debes escribir a ayuda@modafesc.com o a través de nuestro chat.</p>
  <p>Envíanos número de orden, modelos y tallas que quieras modificar o cancelar para que el proceso sea más rápido.</p>
  <p>Considera que si tu paquete ya cuenta con una guía de envío, no será posible detener el proceso y tendrás que esperar a recibirlo en tu domicilio.</p>
</div>
</div>

<hr>
<div class="contenedor">
<div class="etiqueta">¿Cómo puedo ver mi carrito de compras?</div>
<div class="contenido">

  <p>Cuando agregues un producto al carrito inmediatamente se abrirá del lado derecho, ahí puedes eliminar los productos que no quieras o modificar la cantidad de cada uno.</p>

  <p>También puedes dar click en el botón de VER MI CARRITO.</p>

</div>
</div>

<hr>
<div class="contenedor">
<div class="etiqueta">Quiero apartar un producto, ¿es posible?</div>
<div class="contenido">

  <p>No es posible apartar productos desde nuestra página.</p>

  <p>No se puede dejar ningún tipo de anticipo.</p>
</div>
</div>
<hr>
<h2>Preguntas Frecuentes Sobre Métodos de Pago </h2>
<hr>
<div class="contenedor">
<div class="etiqueta">¿Cuáles son sus formas de pago?</div>
<div class="contenido">
  <p><strong>PayPal</strong>
<ul>
  <li>Usa tu saldo disponible en PayPal</li>
  <li>Cargo a tu cuenta o tarjeta sin salir de casa</li>
  <li>Acreditación entre 24 y 48 horas</li>
</ul>
</p>
<p>Elige PayPal, da clic en SIGUIENTE y después en PAGAR</p>

<p>Inicia sesión en tu cuenta PayPal y usa tu saldo disponible o cualquier tarjeta que tengas registrada en dicha plataforma.</p>

<p>Si no tienes una cuenta entonces puedes crearla en ese momento. Para mayor información sobre PayPal comunícate con el Centro de Atención a Clientes PayPal llamando al 01800-925-0308.</p>

<p>La acreditación demorará hasta dos días y recibirás un email de confirmación del pago.
</p>

<br>

</div>
</div>

<hr>
<div class="contenedor">
<div class="etiqueta">¿Es seguro colocar los datos de mi tarjeta en su página?</div>
<div class="contenido">

  <p>Protegemos la seguridad, información y comunicación de nuestros clientes a cualquier hora y desde todos los dispositivos.</p>

  <p>Contamos con certificados de seguridad SSL y cumplimos con las disposiciones legales y códigos de ética de La Asociación Mexicana de Internet (AMIPCI).</p>

  <p>MODA FESC no comparte la base de datos de clientes con otras empresas.</p>

  <p>Revisa nuestro aviso de privacidad.</p>
</div>
</div>
<hr>
<h2>Preguntas Frecuentes Sobre Envío </h2>
<hr>
<div class="contenedor">
<div class="etiqueta">¿Cuál es el tiempo de entrega?</div>
<div class="contenido">

  <p>Entregamos nuestros pedidos en un tiempo de 7 días hábiles aproximadamente en la mayor parte del país.</p>
  
  <p>Algunos códigos postales son considerados como zonas extendidas por las empresas de mensajería, y en ellas no aplica la garantía de tiempos de entrega indicados. No efectuamos reembolso del costo de envío en estos casos. Para tener una idea clara de la fecha de entrega, consulta el email que te enviaremos cuando el paquete haya sido recolectado.</p>
  </div>
</div>

<hr>
<h2>Preguntas Frecuentes Sobre Devoluciones  </h2>
<hr>
<div class="contenedor">
<div class="etiqueta">¿Puedo cancelar mi pedido antes de que se envíe?
</div>
<div class="contenido">
  <p>Si tu compra aún no cuenta con una guía puedes solicitar la cancelación de la misma.</p>

  <p>Para hacerlo debes escribir a devoluciones@modafesc.com para que tu petición de cancelación sea procesada.</p>

  <p>Cuando tu pedido ya cuente con una guía de envío, no será posible detener el proceso y deberás esperar que llegue a tu domicilio.</p>

  <p>Puedes solicitar una devolución una vez recibido tu paquete a través de nuestro centro de devoluciones.</p>
</div>
</div>
</div>
</div>

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