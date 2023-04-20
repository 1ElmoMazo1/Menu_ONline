<?php
include("conexionBD.php");
ob_start();
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Paso 3: Validar los datos del usuario
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
  echo '<script>alert("¡Ingrese todo los campos!"); window.location.href = "../newregistro.php";</script>';
  exit;

}

// Paso 4: Verificar si el usuario existe previamente
$resultado = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo'");
if (mysqli_num_rows($resultado) > 0) {

  echo '<script>alert("¡El correo electrónico ya está registrado!"); window.location.href = "../newregistro.php";</script>';
  exit;
}

// Paso 5: Insertar los datos del usuario en la base de datos
mysqli_query($conexion, "INSERT INTO usuario (nombre, apellidos, dni, correo, contraseña) VALUES ('$nombre', '$apellidos', '$dni', '$correo', '$contraseña')");

// Paso 6: Cerrar la conexión a la base de datos
mysqli_close($conexion);

header('Location:../index.php ');
exit();
ob_end_flush();
/////nose puede redirigir a la pagina por e l error 403 , falta solucionar el autenticador de credenciales
mysqli_close($conexion);
?>