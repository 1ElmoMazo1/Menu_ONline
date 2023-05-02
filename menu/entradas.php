<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/introcss.css" rel="stylesheet" type="text/css">
	<?php 	include("../action/conexionBD.php");
			
	?>
	<title>Listado de Platos de Comida</title>	
</head>
<header class="head">
	<nav>
    	<ul>
      		<li class="menu">
        		<a href="#">Menu</a>
        <ul>
          	<li><a href="menu/entradas.php">Entradas</a></li>
          	<li><a href="#">Sub apartado 2</a></li>
          	<li><a href="#">Sub apartado 3</a></li>
          	<li><a href="#">Sub apartado 4</a></li>
          	<li><a href="#">Sub apartado 5</a></li>
        </ul>
      		</li>
      			<li><a href="#">Pedido</a></li>
      			<li><a href="#">Ayuda</a></li>
      			<li><a href="#">Contactos</a></li>
    	</ul>
	</nav>
</header>
<!-- .-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-. -->
<?php
include("../action/carta.php");

echo $row["nombre"];
?>
<!-- .-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-. -->
<body>
<h1>Listado de Platos de Comida</h1>
	<ul>
		<li>
			<img src="https://via.placeholder.com/100" alt="Plato 1">
				<div>
					<h2>Plato 1</h2>
					<p>Descripción del plato 1.</p>
					<p class="price">$10.00</p>
				</div>
		</li>
	</ul>
</body>