
    <?php 
        include("action/conexionBD.php");
        
    ?>
    <link rel="stylesheet" type="text/css" herf="css/registro.css">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/registro.css">
  <title>Document</title>
</head>
<body>

  <br>
<div class="contenedor">
<div class="formulario"> 

<form action="action/registro.php" method="POST">
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre">

  <label for="apellidos">Apellidos:</label>
  <input type="text" id="apellidos" name="apellidos">

  <label for="dni">DNI:</label>
  <input type="text" id="dni" name="dni">

  <label for="correo">Correo electrónico:</label>
  <input type="email" id="correo" name="correo">

  <label for="contraseña">Contraseña:</label>
  <input type="password" id="contraseña" name="contraseña">
  <br>
  <input type="submit" value="Registrar Usuario">
</form>
<br>
<div id="boton">
<form action="index.php" method="get" id="myForm">
  <button type="submit" id="myButton">Iniciar Sesion</button>
</form>
</div>
</div>
</div>
</body>
</html>