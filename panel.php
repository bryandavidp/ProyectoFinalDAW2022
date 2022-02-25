<!DOCTYPE html>
<html lang="es">

<?php 
$paginaActual = "Perfil de usuario";
include("php/head.php"); ?>


<body class="pagina-panel">

  <?php include("php/nav-movil.php"); ?>




  <main class="contenido">
    <section class="banner">

      <section class="panel-usuario">

        <img src="img/portadas/portada-panel.webp" alt="" class="cabecera">

        <section class="perfil">

        </section>
        <!-- <img src="img/product/3.webp" alt="" class="perfil">
 -->

        <section class="info-usuario">
          <h2>Bryandavidp</h2>
          <p>Se unió en Enero de 2022</p>
        </section>

        <section class="menu-panel">
          <!-- Menu de tres botones  -->
          <a href="panel.php" class="boton-panel">Colecciones</a>
          <a href="panel.php" class="boton-panel">Favoritos</a>
          <a href="panel.php" class="boton-panel">Creados</a>

        </section>

        <!-- Colecciones de productos, perfil -->
        <section class="colecciones">

          <section class="productos-marketplace">
            <section class="producto-marketplace">
              <img src="img/product/1.webp" alt="Imagen producto" />
              <div class="info-producto">
                <a href="./producto.php">BigHeadBunnie#1932</a>
                <p>Bryandavidp</p>
              </div>
            </section>

            <section class="producto-marketplace">
              <img src="img/product/2.webp" alt="Imagen producto" />
              <div class="info-producto">
                <a href="producto.php">BigHeadBunnie#1932</a>
                <p>Bryandavidp</p>
              </div>
            </section>

            <section class="producto-marketplace">
              <img src="img/product/3.webp" alt="Imagen producto" />
              <div class="info-producto">
                <a href="producto.php">BigHeadBunnie#1932</a>
                <p>Bryandavidp</p>
              </div>
            </section>

            <section class="producto-marketplace">
              <img src="img/product/2.webp" alt="Imagen producto" />
              <div class="info-producto">
                <a href="producto.php">BigHeadBunnie#1932</a>
                <p>Bryandavidp</p>
              </div>
            </section>

            <section class="producto-marketplace">
              <img src="img/product/3.webp" alt="Imagen producto" />
              <div class="info-producto">
                <a href="producto.php">BigHeadBunnie#1932</a>
                <p>Bryandavidp</p>
              </div>
            </section>

            <section class="producto-marketplace">
              <img src="img/product/4.webp" alt="Imagen producto" />
              <div class="info-producto">
                <a href="producto.php">BigHeadBunnie#1932</a>
                <p>Bryandavidp</p>
              </div>
            </section>

          </section>

        </section>


      </section>


    </section>


    

  </main>





  <?php include("php/footer.php"); ?>

</body>

</html>