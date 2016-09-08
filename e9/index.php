<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 9</title>

	<style type="text/css">
			*{margin: 0; padding: 0;}
			html{background-color: black}
			body{width: 1000px;height: 1000px;margin: auto; background-color: red; }
	</style>
</head>
<body>
	

			<form action="parte2.php" method="post" name="form">
				<table align="center" width="400" colspan="2">
					<tr>
					<td>	<h3>contactenos</h3>	</td>
					</tr>

					<tr>
					<td>Nombre		</td>
					<td><input type="text" name="nom" /></td>
					</tr>

					<tr>
					<td>apellido:</td>
					<td><input type="text" name="ap" />	</td>
					</tr>

					<tr>
					<td>E-Mail		</td>
					<td> <input type="text" name="correo" />	</td>
					</tr>
					<tr>
					<td>comentario		</td>
					<td> <textarea name="com">	</textarea></td>
					</tr>
					<tr>
					<td><input type="submit" value="enviar" title="Ingresar Empleado"/>	</td>
					</tr>

				</table>
			</form>


</body>
</html>