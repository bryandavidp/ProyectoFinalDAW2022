// *************************************************************************
// ************************* VALIDACIÓN DE LOGIN ***************************
// *************************************************************************

// *************************************************************************
// EVENT LISTENERS
// *************************************************************************

// Si existe el formulario de login, añadimos los event listeners de validacion
if (document.querySelector(".formulario-login") != null) {
  // Creamos las variables
  var usuario = document.querySelector("#usuario").value;
  var password = document.querySelector("#password").value;

  // al hacer click en el input del usuario eliminamos las clases de error
  document.getElementById("usuario").addEventListener("click", function () {
    document.getElementById("usuario").classList.remove("error__formulario");
    document
      .querySelector("#usuario + p")
      .classList.remove("error__formulario__mensaje");
  });

  // al hacer click en el input de la contraseña eliminamos las clases de error
  document.getElementById("password").addEventListener("click", function () {
    document.getElementById("password").classList.remove("error__formulario");
    document
      .querySelector("#password + p")
      .classList.remove("error__formulario__mensaje");
  });

  // Vamos a validar los campos de usuario y contraseña cuando se envíe el formulario
  document
    .querySelector(".formulario-login")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      // Vamos a validar el usuario
      usuario = document.querySelector("#usuario").value;
      password = document.querySelector("#password").value;

      if (usuario == "" && password == "") {
        errorUsuarioVacio();
        errorPasswordVacio();
      } else if (usuario == "") {
        errorUsuarioVacio();
      } else if (password == "") {
        errorPasswordVacio();
      } else {
        // Si todo está bien, enviamos el formulario
        document.querySelector(".formulario-login").submit();
      }
    });
}

// *************************************************************************
// FINAL EVENT LISTENERS
// *************************************************************************

// *************************************************************************
// FUNCIONES
// *************************************************************************


function errorUsuarioVacio() {
  // Si el usuario está vacío, mostramos un mensaje de error y le damos foco
  document.querySelector("#usuario").classList.add("error__formulario");
  //Añadimos un mensaje debajo del input para indicar que hay un error
  document
    .querySelector("#usuario + p")
    .classList.add("error__formulario__mensaje");
}

function errorPasswordVacio() {
  // Si la contraseña está vacía, mostramos un mensaje de error y le damos foco
  document.querySelector("#password").classList.add("error__formulario");
  //Añadimos un mensaje debajo del input para indicar que hay un error
  document
    .querySelector("#password + p")
    .classList.add("error__formulario__mensaje");
}

// /////////////////////////////////////////////////////////////////////////
// FINAL FUNCIONES /////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////////////

// /////////////////////////////////////////////////////////////////////////
// FINAL VALIDACION LOGIN///////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////////////

// *************************************************************************
// ********************* VALIDACIÓN DE REGISTRO.PHP ************************
// *************************************************************************

// *************************************************************************
// ************************** EVENT LISTENERS ******************************
// *************************************************************************

// si existe el id formulario-registo, le añadimos los eventos correspondientes a cada input
if (document.querySelector(".formulario-registro") != null) {
  // Creamos las variables
  var usuario = document.querySelector("#usuario-reg").value;
  var password = document.querySelector("#password-reg").value;
  var password2 = document.querySelector("#password-reg2").value;
  var email = document.querySelector("#email-reg").value;
  var nombre = document.querySelector("#nombre-reg").value;
  var apellidos = document.querySelector("#apellidos-reg").value;
  var terminos = document.querySelector("#terminos-reg").value;

  // al hacer click en el input del usuario eliminamos las clases de error
  document.getElementById("usuario-reg").addEventListener("click", function () {
    eliminarErrorUsuarioReg();
  });

  // al hacer click en el input del password eliminamos las clases de error
  document
    .getElementById("password-reg")
    .addEventListener("click", function () {
      eliminarErrorPasswordReg();
    });

  // al hacer click en el input del password2 eliminamos las clases de error
  document
    .getElementById("password-reg2")
    .addEventListener("click", function () {
      eliminarErrorPasswordReg2();
    });

  // al hacer click en el input del email eliminamos las clases de error
  document.getElementById("email-reg").addEventListener("click", function () {
    eliminarErrorEmailReg();
  });

  // al hacer click en el input del nombre eliminamos las clases de error
  document.getElementById("nombre-reg").addEventListener("click", function () {
    eliminarErrorNombreReg();
  });

  // al hacer click en el input del apellidos eliminamos las clases de error
  document
    .getElementById("apellidos-reg")
    .addEventListener("click", function () {
      eliminarErrorApellidosReg();
    });

  // al hacer click en el input del terminos y condiciones eliminamos las clases de error
  document
    .getElementById("terminos-reg")
    .addEventListener("click", function () {
      eliminarErrorTerminosReg();
    });

  // Vamos a validar todos los campos cuando se envie el formulario de registro

  document
    .querySelector("#formulario-registro")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      validarFormularioRegistro();
    });
}

// /////////////////////////////////////////////////////////////////////////
// FINAL EVENT LISTENERS ///////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////////////

// *************************************************************************
// **************************** FUNCIONES **********************************
// *************************************************************************

// funcion para validar el formulario al enviarlo
function validarFormularioRegistro() {
  // Vamos a validar el usuario
  var usuario = document.querySelector("#usuario-reg").value;
  var password = document.querySelector("#password-reg").value;
  var password2 = document.querySelector("#password-reg2").value;
  var email = document.querySelector("#email-reg").value;
  var nombre = document.querySelector("#nombre-reg").value;
  var apellidos = document.querySelector("#apellidos-reg").value;
  var terminos = document.querySelector("#terminos-reg").value;

  var usuarioSpan = document.querySelector("#usuario-reg + p").value;
  alert(usuarioSpan);

  // Vamos a recorrer un foreach para comprobar que los campos no estén vacíos
  var campos = [
    usuario,
    password,
    password2,
    email,
    nombre,
    apellidos,
    terminos,
  ];

  var camposVacios = false;

  campos.forEach(function (campo) {
    if (campo == "") {
      camposVacios = true;
    }
  });

  // Si hay campos vacíos, vamos a ponerles las clases de error
  if (camposVacios == true) {
    // Si el usuario está vacío, mostramos un mensaje de error y le damos foco
    if (usuario == "") {
      errorUsuarioRegVacio();
    }
    // Si la contraseña está vacía, mostramos un mensaje de error y le damos foco
    if (password == "") {
      errorPasswordRegVacio();
    }
    // Si la contraseña2 está vacía, mostramos un mensaje de error y le damos foco
    if (password2 == "") {
      errorPassword2Vacio();
    }
    // Si el email está vacío, mostramos un mensaje de error y le damos foco
    if (email == "") {
      errorEmailVacio();
    }
    // Si el nombre está vacío, mostramos un mensaje de error y le damos foco
    if (nombre == "") {
      errorNombreVacio();
    }
    // Si los apellidos están vacíos, mostramos un mensaje de error y le damos foco
    if (apellidos == "") {
      errorApellidosVacio();
    }
    // Si no acepta los términos y condiciones, mostramos un mensaje de error y le damos foco
    if (terminos == "") {
      errorTerminosVacio();
    }
  } else {
    // Si no hay campos vacíos, vamos a comprobar que los campos cumplan con las condiciones
    comprobacionesCampos();
  }
}

// funcion para agregar las clases error del input usuario
function errorUsuarioRegVacio() {
  document.getElementById("usuario-reg").classList.add("error__formulario");
  document.querySelector("#usuario-reg + p").classList.add("error__formulario__mensaje");
  return;
}

// funcion para agregar las clases error del input password
function errorPasswordRegVacio() {
  document.getElementById("password-reg").classList.add("error__formulario");
  document
    .querySelector("#password-reg + p")
    .classList.add("error__formulario__mensaje");
  return;
}

// funcion para agregar las clases error del input password2
function errorPassword2Vacio() {
  document.getElementById("password-reg2").classList.add("error__formulario");
  document
    .querySelector("#password-reg2 + p")
    .classList.add("error__formulario__mensaje");
  return;
}

// funcion para agregar las clases error del input email
function errorEmailVacio() {
  document.getElementById("email-reg").classList.add("error__formulario");
  document
    .querySelector("#email-reg + p")
    .classList.add("error__formulario__mensaje");
  return;
}

// funcion para agregar las clases error del input nombre
function errorNombreVacio() {
  document.getElementById("nombre-reg").classList.add("error__formulario");
  document
    .querySelector("#nombre-reg + p")
    .classList.add("error__formulario__mensaje");
  return;
}

// funcion para agregar las clases error del input apellidos
function errorApellidosVacio() {
  document.getElementById("apellidos-reg").classList.add("error__formulario");
  document.querySelector("#apellidos-reg + p").classList.add("error__formulario__mensaje");
  return;
}

// funcion para agregar las clases error del input terminos
function errorTerminosVacio() {
  document.getElementById("terminos-reg").classList.add("error__formulario");
  document
    .querySelector("#terminos-reg + p")
    .classList.add("error__formulario__mensaje");
  return;
}

// =============================================================================
// Funciones de eliminacion de clases de error
// =============================================================================

// eliminamos el error del nombre de usuario
function eliminarErrorUsuarioReg() {
  document.getElementById("usuario-reg").classList.remove("error__formulario");
  document
    .querySelector("#usuario-reg + p")
    .classList.remove("error__formulario__mensaje");
}

// eliminamos el error del password
function eliminarErrorPasswordReg() {
  document.getElementById("password-reg").classList.remove("error__formulario");
  document
    .querySelector("#password-reg + p")
    .classList.remove("error__formulario__mensaje");
}

// eliminamos el error del password2
function eliminarErrorPasswordReg2() {
  document
    .getElementById("password-reg2")
    .classList.remove("error__formulario");
  document
    .querySelector("#password-reg2 + p")
    .classList.remove("error__formulario__mensaje");
}

// eliminamos el error del email
function eliminarErrorEmailReg() {
  document.getElementById("email-reg").classList.remove("error__formulario");
  document
    .querySelector("#email-reg + p")
    .classList.remove("error__formulario__mensaje");
}

// eliminamos el error del nombre
function eliminarErrorNombreReg() {
  document.getElementById("nombre-reg").classList.remove("error__formulario");
  document
    .querySelector("#nombre-reg + p")
    .classList.remove("error__formulario__mensaje");
}

// eliminamos el error del apellidos
function eliminarErrorApellidosReg() {
  document
    .getElementById("apellidos-reg")
    .classList.remove("error__formulario");
  document
    .querySelector("#apellidos-reg + p")
    .classList.remove("error__formulario__mensaje");
}

// eliminamos el error del terminos
function eliminarErrorTerminosReg() {
  document.getElementById("terminos-reg").classList.remove("error__formulario");
  document
    .querySelector("#terminos-reg + p")
    .classList.remove("error__formulario__mensaje");
}



// COMPROBACIONES CAMPOS

var comprobacionUsuario;
var comprobacionPassword;
var comprobacionPassword2;
var comprobacionEmail;
var comprobacionNombre;
var comprobacionApellidos;
var comprobacionTerminos;


function comprobacionesCampos(){
  // Si no hay campos vacíos, vamos a comprobar que los campos cumplan con las condiciones
      // Vamos a validar el usuario
      comprobarUsuario();

      comprobarPassword();

      comprobarPassword2();

      comprobarEmail();

      comprobarNombre();

      comprobarApellidos();

      comprobarTerminos();

      return;
}

function comprobarUsuario(){
  if (usuario.length < 5) {
    document.getElementById("usuario-reg").classList.add("error__formulario");
    document.querySelector("#usuario-reg + span").classList.add("error__formulario__mensaje");
    return;
  }
}

function comprobarPassword(){
  // Vamos a validar que la contraseña contenga números y letras, carácteres en mayúsculas y minúsculas y al menos un carácter especial
  if (password.length < 8 || !password.match(/[a-z]/i) || !password.match(/[A-Z]/i) || !password.match(/[0-9]/)) {
    document.getElementById("password-reg").classList.add("error__formulario");
    document.querySelector("#password-reg + span").classList.add("error__formulario__mensaje");
    return;
  }
}

function comprobarPassword2(){
  // Vamos a validar que la contraseña2 contenga números y letras, carácteres en mayúsculas y minúsculas y al menos un carácter especial
  if (password2.length < 8 || !password2.match(/[a-z]/i) || !password2.match(/[A-Z]/i) || !password2.match(/[0-9]/)) {
    document.getElementById("password-reg2").classList.add("error__formulario");
    document.querySelector("#password-reg2 + span").classList.add("error__formulario__mensaje");
    return;
  }
}

function comprobarEmail(){
  // Vamos a validar que el email tenga un formato correcto
  if (email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {

    alert("El email no tiene un formato correcto");
    return;
  }
}

function comprobarNombre(){
  if (isNaN(nombre)) {
    document.getElementById("nombre-reg").classList.add("error__formulario");
    document.querySelector("#nombre-reg + p").classList.add("error__formulario__mensaje");
    return;
  }
}

function comprobarApellidos(){
  if (isNaN(apellidos)) {
    document.getElementById("apellidos-reg").classList.add("error__formulario");
    document.querySelector("#apellidos-reg + span").classList.add("error__formulario__mensaje");
    return;
  }
}

function comprobarTerminos(){
  if (!terminos) {
    document.getElementById("terminos-reg").classList.add("error__formulario");
    document.querySelector("#terminos-reg + span").classList.add("error__formulario__mensaje");
    return;
  }
}



// *************************************************************************
// ******************* FIN DE FUNCIONES ************************************
// *************************************************************************