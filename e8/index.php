<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EJERCICIO 8</title>

	<style type="text/css">
			*{margin: 0; padding: 0;}
			html{background-color: black}
			body{width: 1000px;height: 1000px;margin: auto; background-color: lightblue; }
	</style>
</head>
<body>

	<?php
		$dia=$_POST["dia"];
		$mes=$_POST["mes"];
		$gestion=$_POST["gestion"];

if ($mes=="01"){
		echo "$dia de enero $gestion";
}
if ($mes=="02"){
		echo "$dia de febrero $gestion";
}
if ($mes=="03"){
		echo "$dia de marzo $gestion";
}
if ($mes=="04"){
		echo "$dia de abril $gestion";
}
if ($mes=="05"){
		echo "$dia de mayo $gestion";
}
if ($mes=="06"){
		echo "$dia de junio $gestion";
}
if ($mes=="07"){
		echo "$dia de julio $gestion";
}
if ($mes=="08"){
		echo "$dia de agosto $gestion";
}
if ($mes=="09"){
		echo "$dia de septiembre $gestion";
}
if ($mes=="10"){
		echo "$dia de octubre $gestion";
}
if ($mes=="11"){
		echo "$dia de noviembre $gestion";
}
if ($mes=="12"){
		echo "$dia de diciembre $gestion";
}
"<BR>"
?>


<form method="POST" action="index.php"><!--ENVIA LOS VALORES DEL FORMULARIO MEDIANTE LA PETICION POST A LA MISMA PAGINA-->
	
		
			dia:
		 <input name="dia" type="text" id="dia" value=""/><br>
			mes:
		<input name="mes" type="text" id="mes" value=""/><br>
			gestion:
		 <input name="gestion" type="text" id="gestion" value=""/><br>
		
			
		
		<input name="btnfecha" type="submit" id="btnfecha" value="ir  a fecha"/>
	
</form>


</body>


</html>

