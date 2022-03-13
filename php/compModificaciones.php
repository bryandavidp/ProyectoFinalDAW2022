<?php
session_start();

if (isset($_SESSION['ID'])) {

// inclusion de archivos importantes
include ("conn.php");
include ("funciones.php");

$conn = connect($db);

$errores;

$_POST = normalizeInput($_POST);


/* ========================================================================= */
// Ahora viene una serie de comprobaciones que son para poder recibir
// cualquier cantidad de parámetros del formulario y que no explote por 
// falta de informacion del usuario.
// ---------------------------------
//Pon que por ejemplo el usuario solo desea modificar su nombre de usuario
// y no desea que se cambie nada más, así lo conseguimos.
/* ========================================================================= */


foreach ($_POST as $key => $value) {
    if($_POST[$key] == ""){
        unset($_POST[$key]);
    }
}


// Para el usuario
if (isset($_POST['Username'])) {
    $_POST['Username'] = normalizarUsuario($_POST['Username']);

        // Comprobamos que el usuario no exista
    if (comprobarUsuarioExiste($conn, $_POST['Username']) == true) {
        $errores['usuario'] = "¡Este nombre de usuario ya existe!";
    }
} 


// Para la contraseña
if (isset($_POST['password']) && isset($_POST['password2'])) {

    var_dump($_POST['password']);
    var_dump($_POST['password2']);
   
    // Comprobamos que las contraseñas sean iguales
    if(comprobarPassword($_POST['password'], $_POST['password2']) == false){
        $errores['Password'] = "Las contraseñas no coinciden";
        echo "Las contraseñas no coinciden";
    }

    $_POST['password'] = md5($_POST['password']);


} 


// Para el email
if (isset($_POST['Email'])) {
    $_POST['Email'] = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);

        // Comprobamos que el email no exista
    if(comprobarEmailExiste($conn, $_POST['Email']) == true){
        $errores['email'] = "Ya existe un usuario registrado con este email";
    }


} 


// Para el nombre
if (isset($_POST['Nombre'])) {
    $_POST['Nombre'] = normalizarStrings($_POST['Nombre']);
} 

// Para el apellido
if (isset($_POST['Apellidos'])) {
    $_POST['Apellidos'] = normalizarStrings($_POST['Apellidos']);
} 

// Para los terminos
if (isset($_POST['Terminos'])) {
    $_POST['Terminos'] = comprobarTerminos($_POST['Terminos']);
}



// Si hay algun parametro que no debe ser enviado a la BBDD debemos unsettearlo
unset($_POST['terminos']);
unset($_POST['password2']);



// ************************************************************************
// Si dentro del Array $errores no hay ningún error, se registra el usuario
// ************************************************************************

if (isset($errores) && count($errores) > 0) {
    $_SESSION['errores'] = $errores;
    header("Location: ../modificarPerfil.php");
} else {

    if(modificarPerfil($conn, $_POST) == true){
        session_destroy();
        header("Location: ../login.php?mod=true");
    } else {
        $error['mensaje'] = "No se han podido modificar los datos en la BBDD.";
        $_SESSION['error'] = $error;
        header("Location: ../modificar.php");
    }
}
} else {
    header("Location: ../login.php");
}