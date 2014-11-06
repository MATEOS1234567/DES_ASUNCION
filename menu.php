<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset = "UTF-8">
	<title>menu del sitio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
	<div class="Contenedor">
		<div class="Caja1 Caja">
			<h2>CUBO DE AGREGADO</h2>
			<ul>
				<li><a href="admin.php">productos</a></li>
				<li><a href="cliente.php">cliente</a></li>
				<li><a href="#">proveedor</a></li>
				<li><a href="#">usuario</a></li>
			</ul>
		</div>

		<div class="Caja2 Caja" >
			<h2>CUBO DE REPORTES</h2>
			<ul>
				<li><a href="admin.php">productos agotados</a></li>
				<li><a href="#">ventas</a></li>
				<li><a href="#">creditos</a></li>
				<li><a href="#">usuarios</a></li>
			</ul>
		</div>

		<div class="Caja3 doble" >
			<h2>productos agotados</h2>
			<table>
				<thead>
					<tr>
						<th>codigo del producto</th>
						<th>proveedor</th>
						<th>referencia</th>
						<th>marca</th>
					</tr>
					<tbody>
						<tr>
							<td>8493</td>
							<td>juan pedro</td>
							<td>avanico</td>
							<td>toyota</td>
						</tr>

						<tr>
							<td>9344</td>
							<td>megrepuesto</td>
							<td>filtro air</td>
							<td>kia</td>
						</tr>

						<tr>
							<td>98394</td>
							<td>wwrrepuesto</td>
							<td>chispero</td>
							<td>hy</td>
						</tr>
					</tbody>
				</thead>
			</table>
		</div>

		

		<div class="Caja5 doble" >
		<h2>buscar producto</h2>
			<form>
				<h3>seleccione la marca</h3>
				<select>
					<option>toyota</option>
					<option>mitsubichi</option>
					<option>nissan</option>
				</select>
				<h3>seleccione el año</h3>
				<input type="number" value="1" />	
				<h3>selccione el producto</h3>
				<select>
					<option>radiador</option>
					<option>amortiguador</option>
					<option>fan</option>
				</select>
				<input class="boton" type="Submit"/>
			</form>
			
		</div>

		<div class="Caja6 Caja " >
			<table>
				<thead>
				<h2>ventas del dia</h2>
					<tr>
						<th>factura N°</th>
						<th>cliente</th>
						<th>total</th>
						<th>hora</th>
					</tr>
					<tbody>
						<tr>
							<td>8493</td>
							<td>juan pedro</td>
							<td>$1000</td>
							<td>8:00 am</td>
						</tr>

						<tr>
							<td>9344</td>
							<td>rafael soto</td>
							<td>$2000</td>
							<td>8:34 am</td>
						</tr>

						<tr>
							<td>98394</td>
							<td>chester soto</td>
							<td>$3500</td>
							<td>10:3 am</td>
						</tr>
					</tbody>
				</thead>
			</table>
		</div>
		<div class="Caja7 Caja" >
			<img src="img/virgem.jpg" width="180" height="160" >
			<h2>2014</h2>
		</div>
	</div>

</body>
</html>