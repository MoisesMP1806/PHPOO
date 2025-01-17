<?php
//comando de inclusion con la ruta de las clases
include_once('../Clases/ejercicio2/Carro2.php');
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<title>
		Ejercicio 2
	</title>
</head>
<body>
	
	<div class="container" style="margin-top: 4em">
	<header> <h1>La verificación</h1></header><br>
	<form method="post">
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2" for="CajaTexto1">Color:</label>
			<div class="col-sm-4">
				<input class="form-control" type="color" name="color" id="CajaTexto1">
			</div>

			<label class="col-sm-2" for="CajaTexto2">Modelo:</label>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="modelo" id="CajaTexto2">
			</div>
		</div>

		<div class="row mt-3">
			<label class="col-sm-2" for="CajaTexto3">Año:</label>
			<div class="col-sm-4">
				<input class="form-control" type="month" name="anio" id="CajaTexto3">
			</div>
		</div>
	</div>
		<button class="btn btn-primary" type="submit" >enviar</button>
		<a class="btn btn-link offset-md-9 offset-lg-9 offset-7" href="../index.php">Regresar</a>
	</form>
 

	</div>
	<div class="container mt-5">
		<h1>Respuesta del servidor</h1>
		<table class="table">
				<thead>
		      <tr>
		       <th>Caracteristicas de carro</th>
		        
		      </tr>
		    </thead>
		    <tbody>
					<tr>
						<td><?='Color:'?></td>
						<td><?=$Carro1->color?></td>
													
					</tr>
				
					<tr>
						<td><?='Modelo:'?></td>
						<td><?=$Carro1->modelo?></td>
												
					</tr>

					<tr>
						<td><?='Verificacion:'?></td>
						<td><?=$Carro1->circula?></td>
												
					</tr>
					
			</tbody>
		</table>

    

</body>
</html>