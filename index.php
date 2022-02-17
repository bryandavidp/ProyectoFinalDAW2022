<!DOCTYPE html>
<html lang="es">

<?php
$paginaActual = "Inicio";

include("php/head.php"); 
?>


  <body class="index">

  <?php include("php/nav-movil.php"); ?>




  <main class="contenido">
        <section class="banner">
          <section class="banner-desktop">
            <h1>Explora nuestras colecciones</h1>
    
            <h3>
            En open universe encontrarás el arte que siempre habías buscado.
            </h3>
    
            <div class="botones-banner">
            <a href="marketplace.php" class="boton_banner">Explorar</a>
            <a href="login.php" class="boton_banner">Iniciar sesión</a>
            </div>
          </section>
            <section class="producto">
            <img src="img/perfil.webp" alt="Imagen producto" />
            <div class="info-producto">
            <a href="./producto.php">BigHeadBunnie#1932</a>
                <p>Bryandavidp</p>
            </div>
            </section>
        </section>
    </main>



    <?php include("php/footer.php"); ?>

  </body>
</html>
