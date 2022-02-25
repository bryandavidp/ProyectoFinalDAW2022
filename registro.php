<!DOCTYPE html>
<html lang="es">

<?php
$paginaActual = "Registrarse";
include("php/head.php"); ?>


<body class="pagina-registro">

  <?php include("php/nav-movil.php"); ?>




  <main class="contenido">
    <section class="banner">
      <form action="panel.php" method="post" class="formulario-registro" id="formulario-registro">

        <h1>Registrarse</h1>

        <div class="campo-formulario">
          <label for="usuario">Nombre de usuario</label>
          <input type="text" name="usuario" id="usuario-reg" placeholder="Usuario" autocomplete="username">
          <p class="d-none">
            ¡No puede dejar el nombre de usuario vacío!
          </p>

          <span class="d-none">El nombre de usuario no puede contener números o menos de 5 caracteres</span>
        </div>


        <div class="campo-formulario">
          <label for="usuario">Nombre(s)</label>
          <input type="text" name="usuario" id="nombre-reg" placeholder="Nombre">
          <p class="d-none">
            ¡No puede dejar su nombre vacío!
          </p>
        </div>

        <div class="campo-formulario">
          <label for="usuario">Apellido(s)</label>
          <input type="text" name="usuario" id="apellidos-reg" placeholder="Apellidos">
          <p class="d-none">
            ¡No puede dejar su apellido vacío!
          </p>
        </div>

        <div class="campo-formulario">
          <label for="usuario">Correo electrónico</label>
          <input type="text" name="email" id="email-reg" placeholder="Correo electronico" autocomplete="email">
          <p class="d-none">
            ¡No puede dejar email vacío!
          </p>
        </div>

        <div class="campo-formulario">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password-reg" placeholder="Contraseña" autocomplete="current-password">
          <p class="d-none">
            ¡Debe aceptar los términos y condiciones!
          </p>
        </div>

        <div class="campo-formulario">
          <label for="password">Repetir contraseña</label>
          <input type="password" name="password" id="password-reg2" placeholder="Repetir contraseña" autocomplete="current-password">
          <p class="d-none">
            ¡No puede dejar el nombre de usuario vacío!
          </p>
        </div>

        <!-- terms and conditions -->
        <div class="campo-formulario">
          <label for="terminos">
            <input type="checkbox" name="terminos" id="terminos-reg" value="1">
            Acepto los términos y condiciones generales de uso.
          </label>
          <p class="d-none">
            ¡No puede dejar el nombre de usuario vacío!
          </p>
        </div>

        <div class="boton-formulario">
          <input type="submit" value="Registrarse">
        </div>

        <p>¿Ya estás registrado? <br><a href="login.php">¡Inicia sesión!</a></p>
      </form>
    </section>
  </main>


  <script>

  </script>



  <?php include("php/footer.php"); ?>

</body>

</html>