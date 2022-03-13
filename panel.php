
<!DOCTYPE html>
<html lang="es">

<?php 

// Definimos las vairbles necesarias y los includes externos
$paginaActual = "Perfil de usuario";
include ('php/conn.php');
include ('php/funciones.php');
include("php/head.php"); 

// Iniciamos la sesión 
session_start();

//Comprobamos que el usuario está logueado comprobando la sesion Username tiene algo
if (isset($_SESSION['Username'])) {

  $usuario = $_SESSION['Username'];
  $nombre = $_SESSION['Nombre'];
  $apellido = $_SESSION['Apellidos'];
  $email = $_SESSION['Email'];
  $fecha = formatearFecha($_SESSION['fechaRegistro']);


?>


<body class="pagina-panel">

  <?php include("php/nav-movil.php"); ?>




  <main class="contenido">
    <section class="banner">

      <section class="panel-usuario">

        <img src="img/portadas/portada-panel.webp" alt="" class="cabecera">

        <section class="perfil">

        </section>
        <!-- <img src="img/product/3.webp" alt="" class="perfil"> -->

        <section class="info-usuario">
          <h2><b> <?php echo ucfirst($usuario); ?></b></h2>
          <p>Se unió el <?php echo $fecha; ?></p>
          <hr>
          <p><b>Nombre completo:</b>   <?php echo ucfirst($nombre) . " " . ucfirst($apellido); ?></p>
          <p><b>Email:</b>  <?php echo $email; ?></p>

          <!-- Boton modificar perfil -->
          <a href="modificarPerfil.php" class="btn-modificar">Modificar perfil</a>

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
                <p><?php echo $usuario; ?></p>
              </div>
            </section>

            <section class="producto-marketplace">
              <img src="img/product/2.webp" alt="Imagen producto" />
              <div class="info-producto">
                <a href="producto.php">BigHeadBunnie#1932</a>
                <p><?php echo $usuario; ?></p>
              </div>
            </section>

            <section class="producto-marketplace">
              <img src="img/product/3.webp" alt="Imagen producto" />
              <div class="info-producto">
                <a href="producto.php">BigHeadBunnie#1932</a>
                <p><?php echo $usuario; ?></p>
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

<?php


} else {
  header("Location: ../login.php");
}

?>