<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>EJERCICIO 3</title>
	<style type="text/css">
			*{margin: 0; padding: 0;}
			html{background-color: grey}
			body{width: 800px;height: 800px;margin: auto; background-color: white; }
			section#uno{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#dos{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#tres{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cuatro{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cinco{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#seis{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#siete{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#ocho{width: 100px;height: 100px; float:left; background-color:springgreen;}

			section#nueve{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#diez{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#once{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#doce{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#trece{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#catorce{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#quince{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#diesiseis{width: 100px;height: 100px; float:left; background-color:darkkhaki;}

			section#diesisiete{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#diesiocho{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#diesinueve{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#veinte{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#veintiun{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#veintidos{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#veintitres{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#veinticuatro{width: 100px;height: 100px; float:left; background-color:springgreen;}

			section#veinticinco{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#veintiseis{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#veintisiete{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#veintiocho{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#veintinueve{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#treinta{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#treintaiuno{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#treintaidos{width: 100px;height: 100px; float:left; background-color:darkkhaki;}

			section#treintaitres{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#treintaicuatro{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#treintaicinco{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#treintaiseis{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#treintaisiete{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#treintaiocho{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#treintainueve{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cuarenta{width: 100px;height: 100px; float:left; background-color:springgreen;}

			section#cuarentaiuno{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cuarentaidos{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cuarentaitres{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cuarentaicuatro{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cuarentaicinco{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cuarentaiseis{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cuarentaisiete{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cuarentaiocho{width: 100px;height: 100px; float:left; background-color:darkkhaki;}

			section#cuarentainueve{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cincuenta{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cincuentaiuno{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cincuentaidos{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cincuentaitres{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cincuentaicuatro{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cincuentaicinco{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cincuentaiseis{width: 100px;height: 100px; float:left; background-color:springgreen;}

			section#cincuentaisiete{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#cincuentaiocho{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#cincuentainueve{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#sesenta{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#sesentaiuno{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#sesentaidos{width: 100px;height: 100px; float:left; background-color:darkkhaki;}
			section#sesentaitres{width: 100px;height: 100px; float:left; background-color:springgreen;}
			section#sesentaicuatro{width: 100px;height: 100px; float:left; background-color:darkkhaki;}


	</style>

</head>
<body>

	<header>
		<section id="uno">TORRE</section>
		<section id="dos">CABALLO</section>
		<section id="tres">ALFIL</section>
		<section id="cuatro">REY</section>
		<section id="cinco">REYNA</section>
		<section id="seis">ALFIL</section>
		<section id="siete">CABALLO</section>
		<section id="ocho">TORRE</section>
		
	</header>
	<header>
		<section id="nueve">PEON</section>
		<section id="diez">PEON</section>
		<section id="once">PEON</section>
		<section id="doce">PEON</section>
		<section id="trece">PEON</section>
		<section id="catorce">PEON</section>
		<section id="quince">PEON</section>
		<section id="diesiseis">PEON</section>
	</header>
	<header>
		<section id="diesisiete"></section>
		<section id="diesiocho"></section>
		<section id="diesinueve"></section>
		<section id="veinte"></section>
		<section id="veintiun"></section>
		<section id="veintidos"></section>
		<section id="veintitres"></section>
		<section id="veinticuatro"></section>
		

	<header>
		<section id="veinticinco"></section>
		<section id="veintiseis"></section>
		<section id="veintisiete"></section>
		<section id="veintiocho"></section>
		<section id="veintinueve"></section>
		<section id="treinta"></section>
		<section id="treintaiuno"></section>
		<section id="treintaidos"></section>
	</header>

	<header>
		<section id="treintaitres"></section>
		<section id="treintaicuatro"></section>
		<section id="treintaicinco"></section>
		<section id="treintaiseis"></section>
		<section id="treintaisiete"></section>
		<section id="treintaiocho"></section>
		<section id="treintainueve"></section>
		<section id="cuarenta"></section>
	</header>

	<header>
		<section id="cuarentaiuno"></section>
		<section id="cuarentaidos"></section>
		<section id="cuarentaitres"></section>
		<section id="cuarentaicuatro"></section>
		<section id="cuarentaicinco"></section>
		<section id="cuarentaiseis"></section>
		<section id="cuarentaisiete"></section>
		<section id="cuarentaiocho"></section>
	</header>

	<header>
		<section id="cuarentainueve">PEON</section>
		<section id="cincuenta">PEON</section>
		<section id="cincuentaiuno">PEON</section>
		<section id="cincuentaidos">PEON</section>
		<section id="cincuentaitres">PEON</section>
		<section id="cincuentaicuatro">PEON</section>
		<section id="cincuentaicinco">PEON</section>
		<section id="cincuentaiseis">PEON</section>
	</header>

	<header>
		<section id="cincuentaisiete">TORRE</section>
		<section id="cincuentaiocho">CABALLO</section>
		<section id="cincuentainueve">ALFIL</section>
		<section id="sesenta">REYNA</section>
		<section id="sesentaiuno">REY</section>
		<section id="sesentaidos">ALFIL</section>
		<section id="sesentaitres">CABALLO</section>
		<section id="sesentaicuatro">TORRE</section>
	</header>

	

</body>
</html>