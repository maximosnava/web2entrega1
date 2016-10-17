<div class="row">
  <div id="contact">
    <form id="contacto" action="index.php?action=enviarContacto"  class="col-xs-4 col-md-offset-4" method="post">
      <h2>Contactanos</h2>
        <div>
          <button class="face"></button>
          <button class="twit" ></button>
          <button class="inst" ></button>
        </div>
        <div class="contacto">
          <div >
            <h2>Nombre</h2>
              <input name="nombre" type="text" value="" size="30" />
          </div>
          <div>
            <h2>E-mail</h2>
              <input name="email" type="text" value="" size="30" />
          </div>
          <div>
            <h2>Mensaje</h2>
              <textarea name="mensaje" rows="7" cols="50"></textarea>
          </div>
            <input type="submit"  value="Enviar email" />
        </div>
    </form>
  </div>
</div>
