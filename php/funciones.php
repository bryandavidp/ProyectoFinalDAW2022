<?php

//funcion para loguearse en la pagina
function login($conn, $username, $password)
{

    try{

    //Encriptamos la contraseña
    $password = md5($password);

    $sql = "SELECT * FROM Users WHERE Username = :username AND Password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
    return $result;
    
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return false;
    }
}

// Funcion para registrar usuarios
function registrarUsuario($conn, $usuario, $nombre, $apellidos, $email, $password){

    try{
        $sql = "INSERT INTO Users (Username, Password, Email, Nombre, Apellidos) VALUES (:username, :password, :email, :nombre, :apellidos)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $usuario);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }

}

// esta función comprueba que las contraseñas sean iguales
function comprobarPassword($password, $password2){

    if ($password != $password2) {
        return false;
    } else {
        return true;
    }

}

// Comprueba si el usuario que le pasamos existe
function comprobarUsuarioExiste($conn, $usuario){

    $sql = "SELECT * FROM Users WHERE Username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $usuario);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($result['Username']) && $result['Username'] == $usuario) {
        return true;
    } else {
        return false;
    }

}

// comprueba si el email que le pasamos existe
function comprobarEmailExiste($conn, $email){

    $sql = "SELECT * FROM Users WHERE Email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($result['Email']) && $result['Email'] == $email) {
        return true;
    } else {
        return false;
    }

}

// FUNCION PARA NORMALIZAR LAS PETICIONES POST
function normalizeInput($input){

    foreach ($input as $key => $value) {
        // to do: controlar el tipo de dato a limpiar ?
        $input[$key] = stripslashes($value);
        $input[$key] = htmlspecialchars($value);
        $input[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
        $input[$key] = filter_var($value, FILTER_SANITIZE_EMAIL);
       

        var_dump($input[$key]);
        echo "<br>";

    }

    return $input;
}

// Funcion para comprobar que los terminos están aceptados
function comprobarTerminos($terminos){

    if ($terminos != "on") {
        return true;
    } else {
        return false;
    }

}

function mostrarErrores($errores){

    if (isset($errores) && count($errores) > 0) {
        echo "<div id='errores' class='error'>";
        echo "<h4> Errores en el formulario:</h4>";
        foreach ($errores as $error => $valor) {
            echo "<p class='$error'>$valor</p>";
        }
        echo "</div>";
    }
}

function normalizarUsuario($username)
{
    $username = trim($username);
    $username = strtolower($username);
    
    return $username;
}

// Funcion para normalizar los Strings, quitando espacios en blanco, etc
function normalizarStrings($string)
{
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    $string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
    $string = filter_var($string, FILTER_SANITIZE_EMAIL);
    
    return $string;
}

// Funcion para eliminar un usuario de la base de datos 
// NO ESTÁ EN USO ACTUALMENTE, pero funciona.
function eliminarUsuario($conn, $usuario, $password){
    
        try{
            $sql = "DELETE FROM Users WHERE Username = :username AND Password = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $usuario);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    
}

// Funcion para formatear la fecha de forma más legible
function formatearFecha($fecha){
    $fecha = date('d-m-Y', strtotime($fecha));
    return $fecha;
}


// Funcion para cerrar sesion, destruyendola.
function cerrarSesion(){
    session_start();
    session_destroy();
    header('Location: ../login.php');
}

// Funcion para mostrar el boton de cerrar sesion
function botonCerrarSesion(){
    echo '<a href="php/cerrarSesion.php" class="boton-panel">Cerrar sesión</a>';

}


/* ============================================= */
/* ====== FUNCIONES DE MODIFICAR USUARIO ======= */
/* ============================================= */


// Funcion para modificar el perfil del usuario
function modificarPerfil($conn, $data)
    {
        try 
        {
            $id = $_SESSION['ID'];
            


            foreach ($data as $chunk => $value) {
                echo "<br>";
                echo "CHUNK: ". $chunk . "";
                echo "<br>";
                echo "VALUE: ". $value . "";
                $sql = "UPDATE Users SET 
                    $chunk = '$value' WHERE ID = $id";

                $stmt = $conn->prepare($sql);
                $stmt->execute();
            }  

                      
            return true;

        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }