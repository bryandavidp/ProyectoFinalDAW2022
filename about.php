<!DOCTYPE html>
<html lang="es">

<?php 
$paginaActual = "Sobre nosotros";
include("php/head.php"); ?>


<body class="pagina-about">

  <?php include("php/nav-movil.php"); ?>




  <main class="contenido">
    <section class="banner">
      <section class="banner-desktop">
        <h1>Sobre nosotros</h1>

        <h3>
          Somos una plataforma dedicada a la compra, venta e intercambio de NFT’s (Tokens No Fungibles).
        </h3>

        <div class="botones-banner">
          <a href="marketplace.php" class="boton_banner">Explorar</a>
          <a href="login.php" class="boton_banner">Iniciar sesión</a>
        </div>
      </section>
      <section class="producto">
        <img src="img/product/1.webp" alt="Imagen producto" />
        <div class="info-producto">
          <h2>Título del producto</h2>
          <p>Pedro Sánchez</p>
        </div>
      </section>
    </section>
  </main>




  <?php include("php/footer.php"); ?>

</body>

</html>