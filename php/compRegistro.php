<?php
include ("conn.php");
include ("funciones.php");

$conn = connect($db);

session_start();

$_POST = normalizeInput($_POST);

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$terminos = $_POST['terminos'];

$usuario = normalizarUsuario($usuario);
$nombre = normalizarStrings($nombre);
$apellidos = normalizarStrings($apellidos);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$terminos = comprobarTerminos($terminos);

$errores;

// Comprobamos que el usuario no exista
if (comprobarUsuarioExiste($conn, $usuario) == true) {
    $errores['usuario'] = "El usuario ya existe";
}

// Comprobamos que las contraseñas sean iguales
if(comprobarPassword($password, $password2) == false){
    $errores['password'] = "Las contraseñas no coinciden";
}

// Comprobamos que el email no exista
if(comprobarEmailExiste($conn, $email) == true){
    $errores['email'] = "El email ya existe";
}


// ************************************************************************
// Si dentro del Array $errores no hay ningún error, se registra el usuario
// ************************************************************************

if (isset($errores) && count($errores) > 0) {
    $_SESSION['errores'] = $errores;
    header("Location: ../registro.php");
} else {

    $password = md5($password);

    if(registrarUsuario($conn, $usuario, $nombre, $apellidos, $email, $password) == true){
        $_SESSION['registrado'] = true;
        header("Location: ../login.php?reg=true");
    } else {
        $error['mensaje'] = "No se ha podido registrar el usuario en la BBDD.";
        $_SESSION['error'] = $error;
        header("Location: ../registro.php?reg=false");
    }
}



?>