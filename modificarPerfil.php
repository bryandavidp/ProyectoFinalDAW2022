<!DOCTYPE html>
<html lang="es">

<?php
session_start();

// Impedimos el acceso si no estás logueado
if (isset($_SESSION['Username'])) {
   
$errores = $_SESSION['errores'];

$mensaje = "No es necesario rellenar todos los campos para modificarlos.";
$paginaActual = "Modificar Perfil";
include("php/head.php");
include("php/funciones.php");

?>


<body class="pagina-registro">

    <?php include("php/nav-movil.php"); ?>




    <main class="contenido">
        <section class="banner">

            <form action="./php/compModificaciones.php" method="post" class="formulario-registro" id="formulario-registro">

                <h1>Modificar perfil</h1>

                <?php

                if (isset($mensaje)) {
                    echo "<p class='modificar--info'>$mensaje</p>";
                }

                ?>

                <?php
                //Mostramos por pantalla los errores obtenidos por el array $errores

                if (isset($errores)) {
                    mostrarErrores($errores);
                }


                ?>

                <div class="campo-formulario">
                    <label for="usuario">Nombre de usuario</label>
                    <input type="text" name="Username" id="username" placeholder="<?php echo ucfirst($_SESSION['Username']); ?>" autocomplete="username">
                    </div>


                <div class="campo-formulario">
                    <label for="usuario">Nombre(s)</label>
                    <input type="text" name="nombre" id="nombre-reg" placeholder="<?php echo ucfirst($_SESSION['Nombre']); ?>">
                  
                </div>

                <div class="campo-formulario">
                    <label for="usuario">Apellido(s)</label>
                    <input type="text" name="apellidos" id="apellidos-reg" placeholder="<?php echo ucfirst($_SESSION['Apellidos']); ?>">
                   
                </div>

                <div class="campo-formulario">
                    <label for="usuario">Correo electrónico</label>
                    <input type="text" name="email" id="email-reg" placeholder="<?php echo $_SESSION['Email']; ?>" autocomplete="email">
                    
                </div>

                <div class="campo-formulario">
                    <label for="password">Contraseña</label>
                    <input type="password" name="Password" id="password-reg" placeholder="Nueva contraseña" autocomplete="current-password">
                 
                </div>

                <div class="campo-formulario">
                    <label for="password">Repetir contraseña</label>
                    <input type="password" name="password2" id="password-reg2" placeholder="Repetir contraseña" autocomplete="current-password">
                  
                </div>


                <div class="boton-formulario">
                    <input type="submit" value="Guardar cambios">
                </div>
            </form>
        </section>
    </main>


    <script>

    </script>



    <?php include("php/footer.php"); ?>

</body>

</html>

<?php
} else {
    header("Location: login.php");
}