<script type="text/javascript">
   $( document ).ready(function() {
      $("#formulario").submit(function(e) {
        var url = "mail.php";

        $.ajax({
                type: "POST",
                url: url,
                data: $("#formulario").serialize(),
                success: function(data)
                {
                    $("#before_send_email").hide();
                    $("#meanwhile_send_email").show();
                    setTimeout(function () {
                      $("#meanwhile_send_email").hide();
                      $("#after_send_email").show();
                    }, 3000);
                }
              });

        e.preventDefault();
      });
    });
</script>
<div class="container" id="contacto">
  <div id= 'before_send_email'>
    <h2 style="color:#373C40;">Contáctanos</h2>
    <img id="guarch_logo" src="images/logo-min.png" alt="logo"/>
    <ul class="lista-contacto">
      <li>Puede contactar con Guarch abogados:</li>
      <li>Realizando una consulta mediante nuestro formulario.</li>
      <li>Llamando a nuestro <a href="tel:+34961047508"> teléfono de contacto.</a></li>
      <li>Acercándote a nuestras <a href="#localizacion"> oficinas</a> localizadas en el centro de Valencia.</li>
    </ul>
    <h4></h4>
    <form id="formulario" class="contact_form" method="post">
      <div class="message">
        <div class="col-md-8 col-sm-8 grid_8 c1">
          <input type="text" name="asunto" class="text" placeholder="Asunto *" id="asunto_mail" required=""/>
          <textarea name="message" placeholder="Escriba aquí su consulta... *" id="consulta_mail" required=""></textarea>
        </div>
        <div class="col-md-4 col-sm-4 grid_4 c1">
          <input type="text" name="name" class="text" placeholder="Nombre *" required=""/>
          <input type="email" name="email" class="text" placeholder="Email *" required=""/>
          <input type="number" name="telephone" class="text" placeholder="Tu teléfono (no es obligatorio)"/>
        </div>
        <div class="clearfix"></div>
        <input type="submit" id="envio_email" class="more_btn" value="Enviar"/>
      </div>
    </form>
  </div>
  <div id="meanwhile_send_email" style="display: none;">
    <h2>Enviando</h2>
    <hr>
    <img id="spin_to_win" src="images/spinner.gif" alt="consuluta email" width="50px" height="50px" />
  </div>
  <div id="after_send_email" style="display: none;">
    <img src="images/logo.png" alt="consulta gratuita">
    <h2>Gracias por contactar con nosotros!</h2>
    <hr>
    <h4>Nos pondremos en contacto con usted lo antes posible</h4>
  </div>
</div>