<?php
session_start();
include("conexionBD.php");
$username=$_POST['username'];
$password=$_POST['password'];

if (!$conexion) {
  die("Conexión fallida: " . mysqli_connect_error());
}
// validacion de conexion

$sql="SELECT * FROM usuario WHERE  (dni='$username' OR correo='$username') AND contraseña='$password'";
$resultado = mysqli_query($conexion,$sql);
if (mysqli_num_rows($resultado) > 0) {
  // Iniciar sesión para el usuario y redirigir a la página de inicio
  session_start();
  $_SESSION["usuario"] = $username;
  header("Location: ../intro.php");
} else {
  // Mostrar un mensaje de error si las credenciales son inválidas
  echo "Nombre de usuario o contraseña incorrectos.";
}

mysql_close($conexion); 
?>