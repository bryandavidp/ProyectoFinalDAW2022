<!DOCTYPE html>
<html lang="es">

<?php include("php/head.php"); ?>


<body class="pagina-contacto">

  <?php include("php/nav-movil.php"); ?>




  <main class="contenido">
    <section class="banner">
      <form action="index.php" method="post" class="formulario-login">

        <h1>Contáctanos</h1>

        <p>Puedes contactarnos através de nuestras redes sociales.</p>
        
        <section class="rrss">
            <span
              class="iconify"
              data-icon="logos:twitter"
              style="color: white"
              data-width="50"
              data-height="50"
            ></span>
            <span
              class="iconify"
              data-icon="akar-icons:instagram-fill"
              style="color: white"
              data-width="50"
              data-height="50"
            ></span>
            <span
              class="iconify"
              data-icon="logos:discord-icon"
              style="color: white"
              data-width="50"
              data-height="50"
            ></span>
            <span
              class="iconify"
              data-icon="logos:youtube-icon"
              style="color: white"
              data-width="50"
              data-height="50"
            ></span>
          </section>

          <p>O también puedes dejarnos un mensaje aquí abajo y te responderemos lo más brevemente posible.</p>

        <div class="campo-formulario">
          <label for="usuario">Nombre(s):</label>
          <input type="text" name="usuario" id="usuario" placeholder="Nombre">
        </div>

        <div class="campo-formulario">
          <label for="usuario">Correo electrónico:</label>
          <input type="text" name="email" id="email" placeholder="Correo electronico">
        </div>

        <div class="campo-formulario">
          <label for="usuario">Asunto:</label>
          <input type="text" name="email" id="email" placeholder="Correo electronico">
        </div>

        <div class="boton-formulario">
          <input type="submit" value="Enviar mensaje">
        </div>

      </form>
    </section>
  </main>




  <?php include("php/footer.php"); ?>

</body>

</html>