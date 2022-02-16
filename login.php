<!DOCTYPE html>
<html lang="es">

<?php include("php/head.php"); ?>


  <body class="pagina-login">

  <?php include("php/nav-movil.php"); ?>


  

    <main class="contenido">
      <section class="banner">

        <!-- Hacemos un formulario de inicio de sesión -->
        <form action="panel.php" method="post" class="formulario-login">

        <h1>Iniciar sesión</h1>

          <div class="campo-formulario">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario">
          </div>

          <div class="campo-formulario">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Contraseña">
          </div>

          <div class="boton-formulario">
            <input type="submit" value="Iniciar sesión">
          </div>

          <p>¿Aún no estás registrado? <br><a href="registro.php">¡Regístrate!</a></p>
        </form>
      </section>
    </main>




    <?php include("php/footer.php"); ?>

  </body>
</html>
