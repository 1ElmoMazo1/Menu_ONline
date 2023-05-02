<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

</head>
<body>
	<div class="login-container">

		<h1>Iniciar Sesión</h1>
		<form id="login-form" method="post" action="action/validar.php">
			<label for="username">DNI O Email</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Contraseña:</label>
			<input type="password" id="password" name="password" required>
			<br>
			<button type="submit">Iniciar Sesión</button>
			<br>
			<a href="newregistro.php"><center>Registrarse</center></a>
		</form>
		
	</div>
	<!--<script src="JS/index.js"></script>-->
</body>
</html>