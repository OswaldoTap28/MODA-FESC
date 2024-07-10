const acordeon = document.getElementsByClassName('contenedor');

for (i=0; i<acordeon.length; i++) {
  acordeon[i].addEventListener('click', function () {
    this.classList.toggle('activa')
  })
}

function sesion(n){
  if (n == 1) {
    alert("¡Vuelva pronto!");
  }
  if (n == 2) {
    alert("Inicie sesión por favor");
    window.location.href='cuenta.php';
  }
}

  function post() {

    var form = document.getElementById("form");
    form.removeAttribute("action");
    var boton = document.getElementById("miBoton");
    boton.removeAttribute("onclick");
    boton.setAttribute("type", "submit");
    boton.setAttribute("name", "carrito");

  }

  function compra() {
    
    var form = document.getElementById("form");
    form.setAttribute("action","https://www.paypal.com/cgi-bin/webscr");
  }

  function paypal(){

      var form = document.getElementById('myForm');
      form.setAttribute("action","https://www.paypal.com/cgi-bin/webscr");
      form.setAttribute("target","_blank")
      form.submit();
      var submitButton = document.getElementById('submitButton');
      submitButton.value = "Guardar Pedido";
      submitButton.setAttribute("type", "submit");
      submitButton.setAttribute("name", "comprar");
      submitButton.removeAttribute("onclick");
      submitButton.setAttribute("onclick","cambiar()");
      var div1 = document.getElementById("nota");
      div1.setAttribute("hidden", 'true');
      var div2 = document.getElementById("entrega");
      div2.removeAttribute("hidden");

  }

  function cambiar(){
    var form = document.getElementById('myForm');
    form.removeAttribute("action");
    form.removeAttribute("target");
  }







