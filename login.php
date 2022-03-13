<!DOCTYPE html>
<html lang="es">

<?php
$paginaActual = "Iniciar sesión";
include("php/head.php");
include("php/funciones.php");

session_start();

if (isset($_GET['errores'])) {
  $errores['error'] = $_GET['errores'];
}

if (isset($_GET['mod'])) {
  $_SESSION['modificaciones'] = "¡Tus datos se han actualizado correctamente!";
  $mensaje = $_SESSION['modificaciones'];
}


if (isset($_SESSION['Username'])) {
    header("Location: panel.php");
} else {

  
  var_dump($errores);

?>


<body class="pagina-login">

  <?php include("php/nav-movil.php"); ?>

  



  <main class="contenido">
    <section class="banner">

      <!-- Hacemos un formulario de inicio de sesión -->
      <form method="post" class="formulario-login" id="formulario-login" action="php/compLogin.php">

        <h1>Iniciar sesión</h1>

        <?php 
      //Mostramos por pantalla los errores obtenidos por el array $errores
      
      if (isset($errores)){
        mostrarErrores($errores); 
      } 

      if (isset($mensaje)) {
        echo "<p class='login--info'>$mensaje</p>";
      }
      
      
      ?>

        <div class="campo-formulario">
          <label for="usuario">Usuario</label>
          <input type="text" name="usuario" id="usuario" placeholder="Usuario" autocomplete="username">
          <p class="d-none">
            ¡No puede dejar el nombre de usuario vacío!
          </p>
        </div>

        <div class="campo-formulario">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Contraseña" autocomplete="current-password">
          <p class="d-none">
            ¡No puede dejar la contraseña vacía!
          </p>
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

<?php

// Cierre del IF de comprobacion de sesión
  } 

?>