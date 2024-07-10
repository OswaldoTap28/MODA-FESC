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
  <title>MODA FESC | TERMINOS Y CONDICIONES</title>
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
    <h1>Terminos y Condiciones</h1>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">General</div>
      <div class="contenido">
      <p><b>Actualización de los Términos y Condiciones </b></p><p>Nos reservamos el derecho de modificar los Términos y Condiciones, en cualquier momento y a nuestra entera consideración. Al continuar haciendo uso de los Servicios, tras haber realizado dichos cambios (independientemente de si enviamos una notificación dando aviso de dichas modificaciones), usted acepta estar obligado en virtud de cualquier modificación realizada a dicha política y/o a las políticas/acuerdos vinculados, incluyendo. Es su responsabilidad revisar esta política y/o las políticas/acuerdos vinculados de vez en cuando, para verificar tales modificaciones.</p>
      <br>
      <p><b>Aceptación de los Términos y Condiciones</b></p><p>Cualquier acceso, navegación o uso de los Servicios indica su aceptación de todos los Términos y Condiciones de este Acuerdo. Si usted no está de acuerdo con cualquier sección de los Términos y Condiciones, deberá interrumpir el acceso o uso de los Servicios de manera inmediata. Por favor lea este Acuerdo detenidamente antes de continuar.<br>
Si tiene alguna pregunta sobre estos Términos y Condiciones puede ponerse en contacto con nosotros en cualquier momento a través de [correo] o de nuestras diferentes formas de contacto.
</p></div>
    </div>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">Registro y Cuenta</div>
      <div class="contenido"><p>Quien quiera usar nuestros servicios, deberá completar el formulario de registro con los datos que le sean requeridos. Al completarlo, se compromete a hacerlo de manera exacta, precisa y verdadera y a mantener sus datos siempre actualizados. La Persona Usuaria será la única responsable de la certeza de sus datos de registro. Sin perjuicio de la información brindada en el formulario, podremos solicitar y/o consultar información adicional para corroborar la identidad de la Persona Usuaria. <br>
La cuenta es personal, única e intransferible, es decir que bajo ningún concepto se podrá vender o ceder a otra persona. Se accede a ella con la clave personal de seguridad que haya elegido y que deberá mantener bajo estricta confidencialidad. <br>
En caso de detectar un uso no autorizado de su cuenta, deberá notificar de forma inmediata y fehaciente a MODA FESC. <br>
Podremos rechazar una solicitud de registro o bien cancelar un registro ya aceptado, sin que esto genere derecho a un resarcimiento. No podrán registrarse nuevamente en el Sitio las Personas Usuarias que hayan sido inhabilitadas previamente. Tampoco podrán registrarse quienes estén incluidos o relacionados a personas incluidas en listas nacionales o internacionales de sanciones. <br>
Además, en caso de detectar el uso de más de una cuenta, podremos aplicar retenciones, débitos y/o cualquier otra medida si consideramos que ese accionar puede perjudicar al resto de las personas que usan nuestro sitio MODA FESC, más allá de las sanciones que pudieran corresponder. </p>

</div>
    </div>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">Sanciones</div>
      <div class="contenido"><p>En caso que la Persona Usuaria incumpliera una ley o los Términos y Condiciones, podremos advertir, suspender, restringir o inhabilitar temporal o definitivamente su cuenta, sin perjuicio de otras sanciones que se establezcan en las reglas de uso particulares de los servicios de MODA FESC.</p>
</div>
    </div>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">Indemnidad</div>
      <div class="contenido"><p>La Persona Usuaria mantendrá indemne a MODA FESC y sus sociedades relacionadas, así como a quienes la dirigen, suceden, administran, representan y/o trabajan en ellas, por cualquier reclamo administrativo o judicial iniciado por otras Personas Usuarias, terceros o por cualquier Organismo, relacionado con sus actividades en el sitio MODA FESC. <br>
En virtud de esa responsabilidad, podrán realizar compensaciones, retenciones u otras medidas necesarias para la reparación de pérdidas, daños y perjuicios, cualquiera sea su naturaleza.
</p></div>
    </div>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">Envíos</div>
      <div class="contenido">Envíos MODA FESC es una herramienta tecnológica ofrecida por MODA FESC, con el objetivo de facilitar el envío de un determinado producto anunciado en nuestro sitio, valiéndose de servicios de transporte y/o logística y/o postales brindados por terceros (las “Empresas de Encomiendas y Envíos”). <br>
MODA FESC se limita a brindar la solución tecnológica que permite: <br>
<ol>
<li> El cálculo del valor del envío </li>
<li> La generación de etiquetas para el posterior envío del producto </li>
<li> El seguimiento del envío por parte de las las Personas usuarias </li>
<li> La recepción y gestión de los reclamos entre las Personas usuarias y/o las Empresas de Encomiendas y Envíos </li>
</ol>
</div>
    </div>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">Productos que no pudieron ser entregados</div>
      <div class="contenido">
      <ol type="a">
      <li><p><b>Productos no entregados al Comprador en su domicilio </b></p>
      <p>Si el Comprador eligió recibir el producto en su domicilio y, por cualquier causa ajena  a MODA FESC y/o a los Transportistas, el producto no pudo ser entregado al Comprador (por ejemplo, porque la dirección es inexacta, porque no se encontraba una persona disponible para recibir el producto, o por cualquier otro motivo), el Transportista deberá: <br>
      <ol type="i" start="1">
      <li>Resguardar el producto <br> Si el producto queda en resguardo del Transportista, esta circunstancia será informada al Comprador quien tendrá 5 (cinco) días hábiles para retirar el producto del domicilio del Transportista en el horario de atención que el Transportista disponga. <br>
Si el Comprador no retira el producto dentro del plazo de 5 (cinco) días, la venta se tendrá por cancelada. En consecuencia, el producto será devuelto al Vendedor y al Comprador se le devolverá su dinero.
</li>
<li>Devolver el producto al Vendedor <br> 
Si al momento de devolver el producto al Vendedor, éste no estuviera en su domicilio para recibirlo o lo rechaza, el producto será enviado nuevamente a las oficinas del Transportista. Esta situación será informada al Vendedor y, desde este aviso, el Vendedor tendrá hasta 60 (sesenta) días corridos para retirar el producto  del domicilio del Transportista en el horario de atención que el Transportista disponga y pagar los eventuales costos de almacenaje.<br>
Si el producto no fuera retirado por el Vendedor dentro del plazo mencionado, aplicarán las previsiones de la cláusula 7 de estos términos y condiciones, y MODA FESC podrá venderlos, donarlos, destruirlos o reciclarlos, en los términos allí detallados.
</li>
<li>Disponer del producto<br>
Si por cualquier causa ajena a MODA FESC y/o a los Transportistas, luego de cumplidas las etapas señaladas  en los párrafos anteriores, los Transportistas no pudieran cumplir con la entrega del producto al Comprador o su devolución al Vendedor, se actuará según el procedimiento que determine la ley aplicable. 
</li>
</p></li></ol>
<li><p><b>Productos no retirados de las sucursales del Transportista </b><br>
Si el Comprador hubiera elegido recibir el producto en una  sucursal del Transportista, y luego no lo retirase, la venta se tendrá por cancelada, el producto será devuelto al Vendedor según el procedimiento de la cláusula 6.a (i) anterior, y al Comprador se le devolverá su dinero.</p></li>
<li><p><b>Disposición de los productos no entregados</b><br>
Cuando la ley aplicable no determine un procedimiento específico para la disposición de los productos no entregados, MODA FESC podrá venderlos, donarlos, destruirlos o reciclarlos, en los términos detallados en la cláusula 7 de estos términos y condiciones.
</p></li>
      </ol></div>
    </div>
    <hr>
    <div class="contenedor">
      <div class="etiqueta">Cancelación de la compra</div>
      <div class="contenido"><p>Si el Comprador usó la Herramienta de Envíos, se entenderá que canceló su compra cuando:
        <ul>
<li>Devuelve un producto al Vendedor y/o</li>
<li>Cancela la compra de un producto luego de que el producto fuera enviado </li>
</ul></p>
<p>Asimismo, el Vendedor deberá:
        <ul>
<li>Aceptar la devolución del producto durante el plazo de 30 (treinta) días contados a partir de su recepción por parte del Comprador y</li>
<li>Pagar por los gastos asociados a la devolución, incluidos los costos de envío.</li>
</ul></p>
<p>MODA FESC podrá:
        <ul>
<li>Donar el producto por cuenta y orden de la Persona Usuaria a una institución sin fines de lucro a elección de MODA FESC</li>
<li>Destruirlo o reciclarlo con cargo a la Persona Usuaria o</li>
<li>Entregarlo a la autoridad competente para que proceda de acuerdo con cualquier normativa aplicable.</li>
</ul></p>
</div>
    </div>
<hr>
    <div class="contenedor">
      <div class="etiqueta">Responsabilidad de MODA FESC</div>
      <div class="contenido">El Vendedor será absolutamente responsable de los envíos que correspondan, asumiendo cualquier consecuencia que se generará (incluyendo sin carácter limitativo, el abono de cualquier costo adicional que sea pertinente), si por su dolo o culpa:
        <ol type="i" start="1">
          <li>Completara errónea o falsamente los datos necesarios para realizar la entrega del paquete por parte de la Empresa de Encomiendas y Envíos y recibir devoluciones</li>
          <li>Cerrará y/o embalara de manera incorrecta el producto a enviar</li>
          <li>Completara errónea o falsamente los datos necesarios para calcular los costos de envíos (por ejemplo, incorrecta categorización del producto); y/o</li>
          <li>utilizara la Herramienta de MODA FESC para enviar alguno de los productos en incumplimiento a las condiciones de transporte previstas y/o productos expresamente prohibidos por estos Términos y Condiciones y/o por los Términos y Condiciones Generales del Sitio y/o por la legislación aplicable en la materia para su transportación y/o productos que no sean aceptados por la Empresa de Encomiendas y Envíos, los cuales pueden estar detallados de manera enunciativa en los presentes Términos y Condiciones de MODA FESC.</li>
        </ol></div>
    </div>
  <hr>
    <div class="contenedor">
      <div class="etiqueta">Responsabilidad de la Persona Usuaria</div>
      <div class="contenido">Es de responsabilidad tanto del Comprador como del Vendedor la veracidad de la información requerida por la plataforma de MODA FESC (que a vía de ejemplo será en cuanto a datos personales y categorización de los bienes), no siendo responsable la Empresa de Encomiendas y Envíos de que, al momento de concurrir a despachar el envío, el mismo no le sea admitido al Vendedor por haber brindado información falsa o incorrecta, o al momento de retirar el envío, el mismo no sea entregado a la persona designada por el Comprador por falta de autorización para ello. El Comprador y el Vendedor consienten expresamente que todos los datos incorporados que sean necesarios para el uso de la Herramienta de MODA FESC y la determinación de su precio sean recolectados y almacenados por MODA FESC, quien podrá transmitirlos a la Empresa de Encomiendas y Envíos seleccionada con el exclusivo fin de facilitar el Servicio de las Empresas. La Empresa de Encomiendas y Envíos no estará autorizada a recolectar los datos con otros fines, salvo que ello sea aceptado por los Usuarios directamente ante la Empresa de Encomiendas y Envíos (según el caso).<br>
Adicionalmente, el Vendedor será responsable por las averías, daños o destrucción que sufran o causen los bienes transportados derivada de los defectos propios de los bienes o su embalaje.<br>
El Comprador reconoce y acepta que al momento de recibir el envío bajo el Servicio de las Empresas, es recomendable que revise el estado general del mismo así como su contenido, y realizar todo reclamo por daños a la brevedad, en tanto que los plazos de reclamación aplicables son muy breves, y que MODA FESC no será responsable por las consecuencias del atraso del Comprador en formular los reclamos pertinentes contra las Empresas de Encomiendas y Envíos. Asimismo, el Comprador reconoce y acepta que podrá rechazar el envío recibido bajo el Servicio de las Empresas si el mismo estuviera dañado, no teniendo obligación de aceptarlo.
</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Responsabilidad de las Empresas de Encomiendas y Envíos que brinden el Servicio de Empresa</div>
      <div class="contenido">En caso de pérdidas y/o averías que sufran el o los productos, durante su traslado exclusivamente por causa imputable a las Empresas de Encomiendas y Envíos que prestaran el Servicio de Empresa, la Persona Usuaria afectado podrá perseguir la responsabilidad y la reparación del perjuicio provocado por éstos directamente a los mismos.</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Atención de reclamos</div>
      <div class="contenido">En caso de que la Persona Usuaria tenga un reclamo que formular con relación al uso de la Herramienta de Envíos, deberá contactar con MODA FESC mediante los canales que ésta habilite, para que MODA FESC gestione los procesos de reclamo respectivos.</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Marcas Comerciales </div>
      <div class="contenido">MODA FESC  es una marca comercial registrada, marca de servicio y/o el nombre comercial de MODA FESC. . Todas las otras marcas comerciales, marcas de servicio y nombres comerciales que aparecen en el Sitio pertenecen a sus respectivos propietarios, incluso si no está específicamente indicado. MODA FESC se exime de cualquier derecho sobre las marcas registradas, marcas de servicio y nombres comerciales que no sean los suyos. No se permitirá ningún uso de estas marcas sin el permiso previo por escrito de MODA FESC, excepto cuando sea necesario para identificar con precisión los productos o servicios de MODA FESC.</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Comunicaciones electrónicas</div>
      <div class="contenido">Al visitar [url de la página] o enviarnos correos electrónicos, usted se está comunicando con nosotros electrónicamente. Usted otorga su consentimiento para recibir comunicaciones electrónicas por parte nuestra. Nosotros nos comunicaremos con usted por correo electrónico o mediante la publicación de avisos en este sitio web. Usted acuerda que todos los acuerdos, avisos, divulgaciones y otras comunicaciones que le proporcionamos electrónicamente satisfacen cualquier requisito legal que dichas comunicaciones sean por escrito.</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Precios</div>
      <div class="contenido">Todos los precios de los productos que se indican a través del Sitio Web incluyen el IVA (16%, en todos los casos) y los demás impuestos que pudiera corresponder a éstos. No obstante, estos precios no incluyen los gastos correspondientes al envío de los productos, los cuales se detallarán aparte en cada pedido y deberán ser aceptados y pagados, previamente a su envío, directa y exclusivamente por el Cliente.<br>
Todos los montos que aparecen en MODA FESC están expresados en pesos mexicanos excepto cuando se indique lo contrario. La denominación aparece claramente expresada.<br>
La información sobre el descuento que se obtiene al comprar en MODA FESC y la comparación de precios se calculan utilizando los precios que proporciona el proveedor.
</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Disponibilidad del producto</div>
      <div class="contenido">MODA FESC informa a los usuarios que el número de unidades disponibles al iniciarse las campañas fueron reservadas por nuestros proveedores para su venta en el Sitio Web de MODA FESC. En ningún caso MODA FESC pondrá a la venta de forma intencionada más unidades de las que el proveedor le haya reservado.<br>
MODA FESC hará todo lo posible por complacer a todos sus clientes en la demanda de los productos. Sin embargo, en ocasiones, y debido a causas difícilmente controlables por MODA FESC, es posible que la cantidad finalmente servida por el proveedor difiera del pedido realizado por MODA FESC para satisfacer los pedidos de los usuarios.<br>
Para el supuesto en que el producto no esté disponible después de haberse realizado el pedido, el cliente será informado por correo electrónico o vía telefónica sobre la cancelación total o parcial de su pedido, La cancelación parcial del pedido debido a falta de disponibilidad no da derecho a la cancelación de la totalidad del pedido. Si a raíz de esta cancelación el cliente desea devolver el producto entregado, deberá seguir los pasos señalados en el apartado Devolución de estas condiciones. En caso de la cancelación total del pedido, derivado de la no disponibilidad del producto, el cliente está en el derecho de recibir la devolución de su compra por medio de un cupón con valor de su pago o en su defecto el reembolso según forma de pago.
</div></div>
    

<hr>
    <div class="contenedor">
      <div class="etiqueta">Pago</div>
      <div class="contenido">El cliente está obligado a pagar el precio total de los productos que adquiera en el mismo momento de realizar el pedido de que se trate, a excepción del pago a través de Oxxo, que tendrán 3 días de plazo. Al precio inicial que figure en el Sitio Web para cada uno de los productos ofrecidos, se le sumarán las tarifas correspondientes a los gastos de envío que en su caso se generen. En cualquier caso, dichas tarifas serán comunicadas previamente, antes de formalizar la propia compra.<br>
El ticket o comprobante de compra que corresponde al pedido de compra se le enviará físicamente en el paquete junto con su pedido. Es importante que lo guarde para cualquier cambio que quiera hacer.<br>
El cliente deberá realizar el pago mediante tarjeta de crédito y/o débito (Visa o Mastercard) o pagando en tiendas Oxxo. Si decides esta opción deberás llenar un formulario con tus datos y presentarlo impreso en dichas tiendas.<br>
El cliente deberá notificar a MODA FESC, a través de la sección “Ayuda al Cliente”, de cualquier cargo indebido o fraudulento en la tarjeta utilizada para compras en el Sitio Web, en el menor plazo de tiempo posible para que MODA FESC pueda realizar las gestiones
</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Formalización del Pedido</div>
      <div class="contenido"><p>Una vez formalizado el pedido, es decir, con la aceptación de “los Términos y Condiciones” y la confirmación del proceso de compra, MODA FESC enviará siempre un correo electrónico al cliente confirmando los detalles de la compra realizada. Así como un número de guía para rastrear el pedido, dentro de aqui va la dirección web.</p><br>
        <p><b>Garantía de los Productos Adquiridos</b><br>
        MODA FESC sólo podrá permitirle la compra de bienes y servicios ofrecidos en su Sitio Web y para ningún otro propósito. MODA FESC es para su uso personal y no comercial. Usted conviene en usar los servicios de MODA FESC sólo para realizar la compra de productos y servicios publicitados en MODA FESC, ya sea para usted mismo o a favor de otra persona a nombre de quien usted está autorizado para actuar legalmente y según los términos de este Convenio.MODA FESC actúa como distribuidor de fabricantes o distribuidores mayoristas que garantizan que los productos que se comercializan en el Sitio Web aqui va la dirección web tienen la calidad y material especificado y no presentan defectos.</p></div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Licencia y acceso al sitio</div>
      <div class="contenido"><b>MODA FESC</b> le otorga una licencia limitada para acceder y hacer uso personal de este sitio web y no para descargar (otra cosa que páginas caché) o modificarlo o cualquier parte del mismo, salvo con el consentimiento expreso por escrito de <b>MODA FESC</b>. Esta licencia no incluye cualquier reventa o uso comercial de este sitio web o de su contenido; cualquier uso derivado de este sitio web o su contenido; o cualquier uso de la búsqueda de datos, robots o métodos similares de recolección o extracción de datos. Este sitio web o cualquier parte de este sitio web no podrá ser reproducido, duplicado, copiado, vendido, revendido, visitado o de otra manera explotado para cualquier fin comercial sin el consentimiento expreso por escrito de <b>MODA FESC</b>. Usted no podrá enmarcar o utilizar técnicas de enmarcado (framing) para adjuntar cualquier marca comercial, logotipo u otra información propietaria (incluyendo imágenes, textos, diseños de página o forma) de <b>MODA FESC</b> sin el consentimiento expreso y por escrito de <b>MODA FESC</b>. Usted no podrá utilizar ninguna etiqueta o cualquier otro "texto oculto" que utilice el nombre o marcas comerciales de <b>MODA FESC</b> sin el consentimiento expreso y por escrito de <b>MODA FESC</b>. Cualquier uso no autorizado da por terminado el permiso o la licencia concedida por <b>MODA FESC</b>. Se le concede un derecho limitado, revocable y no exclusivo para crear un hipervínculo a la página de inicio de [url de la página] siempre y cuando el vínculo no represente a <b>MODA FESC</b>, sus filiales o sus productos o en forma falsa, engañosa, despectiva o de otra manera ofensiva. Usted no podrá utilizar ningún logotipo u otro gráfico propietario o marca comercial de <b>MODA FESC</b> como parte del vínculo sin nuestro permiso expreso por escrito.</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Confidencialidad y seguridad</div>
      <div class="contenido"><p><b>Confidencialidad</b><br>La información del Usuario a la que MODA FEDC le brinde tratamiento y que tenga registrada con motivo de las actividades realizadas por los Usuarios en LA PLATAFORMA es considerada como información confidencial. Toda la información del Usuario está protegida y debidamente resguardada en los servidores de MODA FESC. El único uso que MODA FESC le dará a la mencionada información confidencial es para brindar LOS SERVICIOS a través de LA PLATAFORMA. </p><br>
<p><b>Seguridad</b><br>LA PLATAFORMA cuenta con procesos y estándares de calidad e informáticos que respaldan el adecuado uso de la información que es compartida. En aquellos casos en que MODA FESC haya detectado que algún Usuario ha realizado prácticas que pongan en riesgo la seguridad de LA PLATAFORMA, de los sistemas y/o de los servidores de MODA FESC respecto de la información de los Usuarios, MODA FESC podrá realizar las investigaciones correspondientes, pudiendo reclamar en todo momento, de dicho Usuario, la subsanación de los daños y perjuicios ocasionados tanto a los demás Usuarios, a terceros y/o  a MODA FESC. </p>
      </div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Contacto</div>
      <div class="contenido">Agradecemos sus preguntas y comentarios sobre nuestras prácticas de privacidad o estos Términos y Condiciones. Puede ponerse en contacto con nosotros en cualquier momento por correo electrónico a [correo] o a través de...</div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Garantías y reconocimientos</div>
      <div class="contenido">MODA FESC  no garantiza o avala en ninguna forma la veracidad, precisión, legalidad, moralidad o ninguna otra característica del contenido del material que se publique en LA PLATAFORMA. MODA FESC se libera de cualquier responsabilidad y condiciones, tanto expresas como implícitas, en relación con LOS SERVICIOS e información contenida o disponible en o a través de LA PLATAFORMA incluyendo, sin limitación alguna:
        <ol type="a">
          <li>La disponibilidad de uso de LA PLATAFORMA y, por motivo de problemas técnicos imputables a los sistemas de comunicación y transmisión de datos.</li>
          <li>La ausencia de virus, errores, desactivadores o cualquier otro material contaminante o con funciones destructivas en la información o programas disponibles en o a través de LA PLATAFORMA, o en general, cualquier falla en LA PLATAFORMA.</li>
          <li>No obstante lo anterior, MODA FESC podrá actualizar el contenido de LA PLATAFORMA constantemente, por lo que se pide al Usuario tomar en cuenta que, alguna información publicitada o contenida en o a través de LA PLATAFORMA, puede haber quedado obsoleta y/o contener imprecisiones o errores tipográficos u ortográficos.</li>
        </ol></div>
    </div>

<hr>
    <div class="contenedor">
      <div class="etiqueta">Términos y Condiciones Legales</div>
      <div class="contenido"><p><b>Sesión</b><br>Usted no puede ceder o transferir este Acuerdo (o cualquiera de sus derechos u obligaciones bajo este Acuerdo) sin el consentimiento previo por escrito de la Compañía. Cualquier intento de sesión o transferencia que no cumpla con lo antedicho será nulo. La Compañía puede ceder o transferir libremente este Acuerdo. Este Acuerdo beneficia y es vinculante para las partes y sus respectivos representantes legales, sucesores y cesionarios.
</p><br>
        <p><b>Integridad del Acuerdo; sin renuncia</b><br>Estos Términos y Condiciones, así como cualquier otro aviso legal publicado en el Sitio o las Aplicaciones, constituirán el acuerdo completo entre las partes en relación con los Servicios y sustituye a todos los términos y condiciones, acuerdos, discusiones y documentos anteriores, relacionados con los Servicios. Si alguna disposición de estos Términos y Condiciones resulta inaplicable, dicha disposición no afectará la validez del resto de las disposiciones de estos Términos y Condiciones, que permanecerán en pleno vigor y efecto. Ninguna renuncia a cualquier Término se considerará una renuncia adicional o continua a dicho Término o de cualquier otro Término. El hecho de no hacer uso de cualquier derecho o disposición en virtud de estos Términos y Condiciones no constituirá una renuncia a dicho derecho o disposición.</p><br>
        <p><b>Indemnización</b><br>Usted acepta liberar, indemnizar y defender a la Compañía y a cualquier subsidiaria, filial, o compañía relacionada, así como a los proveedores, licenciatarios y socios, funcionarios, directores, empleados, agentes y representantes de cada uno de ellos, de todas las reclamaciones y costes de terceros (incluidos los honorarios razonables de abogados) derivados de o relacionados con: (1) su uso de los Servicios; (2) su conducta o interacciones con otros usuarios de los Servicios; (3) su incumplimiento de estos Términos y Condiciones. Le notificaremos de inmediato de cualquier reclamación y le proporcionaremos (a su cargo) una ayuda razonable para defender la reclamación. Usted nos permitirá participar en la defensa y no resolverá tal reclamación sin nuestro consentimiento previo por escrito. Nos reservamos el derecho, a nuestro propio costo, de asumir la defensa exclusiva de cualquier asunto sujeto a indemnización. En ese caso, usted no tendrá ninguna obligación adicional de defendernos en este asunto.</p><br>
        <p><b>Interpretación</b><br>Al momento de interpretar estos Términos y Condiciones, los encabezados se incluyen exclusivamente para su conveniencia y no afectan el contenido del mismo.</p>
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