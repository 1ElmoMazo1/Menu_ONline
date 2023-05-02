<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
    
<head>
	<title>Listado de Pedido de Platos</title>

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