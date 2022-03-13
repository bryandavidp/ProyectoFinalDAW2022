<header class="header">
  <nav class="top-nav">
    <a href="index.php" class="logotipo">
      <img src="img/icons/logo.webp" alt="Logotipo">
      <h1 class="logotipo_tipografia"> OpenUniverse</h1>
    </a>
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-button-container" for="menu-toggle">
      <div class="menu-button"></div>
    </label>
    <ul class="menu">
      <input type="search" placeholder="Buscar ítems, colecciones y cuentas" id="Buscador" />

      <li>
        <a href="index.php">Inicio</a>
      </li>
      <li>
        <a href="marketplace.php">Marketplace</a>
      </li>
      <li>
        <a href="about.php">¿Quienes somos?</a>
      </li>
      <li>
        <a href="contacto.php">Contacto</a>
      </li>
      <li></li>


      <?php

      //session_start();
      // Vamos a comprobar la sesion del usuario para mostrar el boton de cerrar sesion o el de iniciar sesion
      if (isset($_SESSION['Username'])) { ?>
        <li>
          <a href="php/logout.php">Cerrar sesión</a>
        </li>
      <?php } else {  ?>
        <li>
          <a href="login.php">Iniciar sesión</a>
        </li>
      <?php } ?>

      <a href="login.php" class="boton_login_menu">Iniciar sesión</a>

      <section class="rrss">
        <span class="iconify" data-icon="akar-icons:twitter-fill" style="color: white" data-width="50" data-height="50"></span>
        <span class="iconify" data-icon="akar-icons:instagram-fill" style="color: white" data-width="50" data-height="50"></span>
        <span class="iconify" data-icon="akar-icons:discord-fill" style="color: white" data-width="50" data-height="50"></span>
        <span class="iconify" data-icon="akar-icons:youtube-fill" style="color: white" data-width="50" data-height="50"></span>
      </section>
    </ul>

    <ul class="menu-desktop">
      <li>
        <a href="index.php">Inicio</a>
      </li>
      <li>
        <a href="marketplace.php">Marketplace</a>
      </li>
      <li>
        <a href="about.php">¿Quienes somos?</a>
      </li>
      <li>
        <a href="contacto.php">Contacto</a>
      </li>
      <?php
      // Vamos a comprobar la sesion del usuario para mostrar el boton de cerrar sesion o el de iniciar sesion
      if (isset($_SESSION['Username'])) { ?>
        <li>
          <a href="php/logout.php" class="boton__cerrarSesion">Cerrar sesión</a>
        </li>
      <?php } else { ?>
        <li>
          <a href="login.php" class="boton__login">Iniciar sesión</a>
        </li>
      <?php } ?>
    </ul>


  </nav>
</header>