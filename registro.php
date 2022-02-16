<!DOCTYPE html>
<html lang="es">

<?php include("php/head.php"); ?>


<body class="pagina-registro">

  <?php include("php/nav-movil.php"); ?>




  <main class="contenido">
    <section class="banner">
      <form action="panel.php" method="post" class="formulario-login">

        <h1>Registrarse</h1>

        <div class="campo-formulario">
          <label for="usuario">Nombre de usuario</label>
          <input type="text" name="usuario" id="usuario" placeholder="Usuario">
        </div>


        <div class="campo-formulario">
          <label for="usuario">Nombre(s)</label>
          <input type="text" name="usuario" id="usuario" placeholder="Nombre">
        </div>

        <div class="campo-formulario">
          <label for="usuario">Apellido(s)</label>
          <input type="text" name="usuario" id="usuario" placeholder="Apellidos">
        </div>

        <div class="campo-formulario">
          <label for="usuario">Correo electrónico</label>
          <input type="text" name="email" id="email" placeholder="Correo electronico">
        </div>

        <div class="campo-formulario">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Contraseña">
        </div>

        <div class="campo-formulario">
          <label for="password">Repetir contraseña</label>
          <input type="password" name="password" id="password2" placeholder="Repetir contraseña">
        </div>

        <!-- terms and conditions -->
        <div class="campo-formulario">
          <label for="terminos">
            <input type="checkbox" name="terminos" id="terminos" value="1">
            Acepto los términos y condiciones generales de uso.
          </label>
        </div>

        <div class="boton-formulario">
          <input type="submit" value="Registrarse">
        </div>

        <p>¿Ya estás registrado? <br><a href="login.php">¡Inicia sesión!</a></p>
      </form>
    </section>
  </main>




  <?php include("php/footer.php"); ?>

</body>

</html>