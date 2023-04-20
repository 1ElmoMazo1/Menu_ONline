
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/introcss.css" rel="stylesheet" type="text/css">
	<title>Listado de Platos de Comida</title>	
</head>
<header>
  <nav>
    <ul>
      <li class="menu">
        <a href="#">Menu</a>
        <ul>
          <li><a href="#">Sub apartado 1</a></li>
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
<style>
    nav {
  background-color: #f8f8f8;
  height: 50px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.menu) {
  background-color: #ddd;
}

ul ul {
  display: none;
  position: absolute;
  top: 50px;
  background-color: #f8f8f8;
  width: 200px;
}

ul li:hover > ul {
  display:inherit;
}

ul ul li {
  float:none;
  display:list-item;
  position: relative;
}

ul ul ul {
  position: absolute;
  top:0;
  left:100%;
}

.menu:hover > ul {
  display:block;
}
</style>
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
		<li>
			<img src="https://via.placeholder.com/100" alt="Plato 2">
			<div>
				<h2>Plato 2</h2>
				<p>Descripción del plato 2.</p>
				<p class="price">$15.00</p>
			</div>
		</li>
		<li>
			<img src="https://via.placeholder.com/100" alt="Plato 3">
			<div>
				<h2>Plato 3</h2>
				<p>Descripción del plato 3.</p>
				<p class="price">$12.00</p>
			</div>
		</li>
	</ul>
</body>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
	<title>Listado de Pedido de Platos</title>
	<style>
		h1 {
			font-size: 24px;
			margin-bottom: 20px;
		}

		table {
			border-collapse: collapse;
			margin-bottom: 20px;
		}

		th, td {
			border: 1px solid #ccc;
			padding: 10px;
		}

		th {
			background-color: #f2f2f2;
			font-weight: normal;
		}

		tr:last-child {
			font-weight: bold;
		}

		.total {
			text-align: right;
		}

		button {
			background-color: #c00;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 18px;
			cursor: pointer;
		}

		button:hover {
			background-color: #f00;
		}
	</style>
</head>
<body>
	<h1>Listado de Pedido de Platos</h1>
	<table>
		<thead>
			<tr>
				<th>Plato</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Subtotal</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Plato 1</td>
				<td>$10.00</td>
				<td><input type="number" value="2" min="1"></td>
				<td>$20.00</td>
			</tr>
			<tr>
				<td>Plato 2</td>
				<td>$15.00</td>
				<td><input type="number" value="1" min="1"></td>
				<td>$15.00</td>
			</tr>
			<tr class="total">
				<td colspan="3">Total:</td>
				<td>$35.00</td>
			</tr>
		</tbody>
	</table>
	<button>Realizar Pedido</button>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	<style>
		h1 {
			font-size: 24px;
			margin-bottom: 20px;
		}

		p {
			margin-bottom: 10px;
		}

		ul {
			margin: 0;
			padding: 0;
			list-style: none;
			margin-bottom: 20px;
		}

		li {
			margin-bottom: 10px;
		}

		a {
			color: #c00;
		}

		address {
			font-style: normal;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<h1>Contacto</h1>
	<address>
		<p>Nombre de la empresa</p>
		<p>Dirección de la empresa</p>
		<p>Ciudad, Estado Código Postal</p>
	</address>
	<ul>
		<li>Teléfono: <a href="tel:+1234567890">123-456-7890</a></li>
		<li>Correo electrónico: <a href="mailto:info@empresa.com">info@empresa.com</a></li>
	</ul>
	<p>Síguenos en:</p>
	<ul>
		<li><a href="#">Facebook</a></li>
		<li><a href="#">Twitter</a></li>
		<li><a href="#">Instagram</a></li>
	</ul>
</body>
</html>

</html>


