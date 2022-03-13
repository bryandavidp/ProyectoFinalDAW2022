<?php


include ("conn.php");
include ("funciones.php");

$conn = connect($db);
  // Vamos a recoger los datos del formulario
  $usuario = normalizarUsuario($_POST['usuario']);
  $password = $_POST['password'];

      //Guardamos los datos del usuario que nos devuelve el login en una variable
      $datosLogin = login($conn, $usuario, $password);

      //var_dump($datosLogin);

  if ($datosLogin != false) {

      // Eliminamos cualquier session que pudiera existir
      if(isset($_SESSION)){
            session_destroy();
      }
      // Iniciamos la sesión
      session_start();


      // Guardamos los datos del usuario en la sesión
      foreach ($datosLogin as $key => $value) {
              $_SESSION[$key] = $value;
      }
      
        header("Location: ../panel.php");

  } else {
        // Si no existe el usuario, mostramos un error
        $_SESSION['error_login'] = "Usuario o contraseña incorrectos.";
        header("Location: ../login.php");
  }
