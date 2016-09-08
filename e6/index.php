<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 6</title>
	<style>
		*{margin: 0;padding: 0;}
		html{background-color: white;}
		body{width: 700px; height: 700px; margin: auto; background-color: gray;}
	</style>
</head>
<body>

<h2>Arreglos</h2>
<p>Generamos un arreglo mixto</p>
<?php 
$personal[] = array(
		'nombre'=>'Juan',
		'telefono'=>'123',
		'correo'=>'jj@hot.com');

$personal[] = array(
		'nombre'=>'Pedro',
		'telefono'=>'456',
		'correo'=>'pp@hot.com');

$personal[] = array(
		'nombre'=>'Carlos',
		'telefono'=>'789',
		'correo'=>'cc@hot.com');

$personal[] = array(
		'nombre'=>'Ricky',
		'telefono'=>'0012',
		'correo'=>'rr@hot.com');

?>
<p>Recorrido del arreglo</p>

<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Telefono</th>
		<th>Correo</th>
	</tr>
	<?php foreach ($personal as $fila): ?>
	<tr>
		<td><?= $fila["nombre"] ?></td>
		<td><?= $fila["telefono"] ?></td>
		<td><?= $fila["correo"] ?></td>
	</tr>
		
	<?php endforeach ?>


</body>
</html>