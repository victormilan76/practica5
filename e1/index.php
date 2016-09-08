<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 1</title>
	<style type="text/css">
			*{margin: 0; padding: 0;}
			html{background-color: black}
			body{width: 1000px;height: 1000px;margin: auto; background-color: lightblue; }
			section#uno{width: 100px;height: 100px;float:left;background-color:blue; }
			section#dos{width: 100px;height: 100px;float:left;background-color:orange; }
			section#tres{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cuatro{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cinco{width: 100px;height: 100px;float:left;background-color:blue; }
			section#seis{width: 100px;height: 100px;float:left;background-color:orange; }
			section#siete{width: 100px;height: 100px;float:left;background-color:blue; }
			section#ocho{width: 100px;height: 100px;float:left;background-color:orange; }
			section#nueve{width: 100px;height: 100px;float:left;background-color:blue; }
			section#diez{width: 100px;height: 100px;float:left;background-color:orange; }

			section#once{width: 100px;height: 100px;float:left;background-color:orange; }
			section#doce{width: 100px;height: 100px;float:left;background-color:blue; }
			section#trese{width: 100px;height: 100px;float:left;background-color:orange; }
			section#catorce{width: 100px;height: 100px;float:left;background-color:blue; }
			section#quince{width: 100px;height: 100px;float:left;background-color:orange; }
			section#diesiseis{width: 100px;height: 100px;float:left;background-color:blue; }
			section#diesisiete{width: 100px;height: 100px;float:left;background-color:orange; }
			section#diesiocho{width: 100px;height: 100px;float:left;background-color:blue; }
			section#diesinueve{width: 100px;height: 100px;float:left;background-color:orange; }
			section#veinte{width: 100px;height: 100px;float:left;background-color:blue; }

			section#veintiuno{width: 100px;height: 100px;float:left;background-color:blue; }
			section#veintidos{width: 100px;height: 100px;float:left;background-color:orange; }
			section#veintitres{width: 100px;height: 100px;float:left;background-color:blue; }
			section#veinticuatro{width: 100px;height: 100px;float:left;background-color:orange; }
			section#veinticinco{width: 100px;height: 100px;float:left;background-color:blue; }
			section#veintiseis{width: 100px;height: 100px;float:left;background-color:orange; }
			section#veintisiete{width: 100px;height: 100px;float:left;background-color:blue; }
			section#veintiocho{width: 100px;height: 100px;float:left;background-color:orange; }
			section#veintinueve{width: 100px;height: 100px;float:left;background-color:blue; }
			section#treinta{width: 100px;height: 100px;float:left;background-color:orange; }

			section#treintaiuno{width: 100px;height: 100px;float:left;background-color:orange; }
			section#treintaidos{width: 100px;height: 100px;float:left;background-color:blue; }
			section#treintaitres{width: 100px;height: 100px;float:left;background-color:orange; }
			section#treintaicuatro{width: 100px;height: 100px;float:left;background-color:blue; }
			section#treintaicinco{width: 100px;height: 100px;float:left;background-color:orange; }
			section#treintaiseis{width: 100px;height: 100px;float:left;background-color:blue; }
			section#treintaisiete{width: 100px;height: 100px;float:left;background-color:orange; }
			section#treintaiocho{width: 100px;height: 100px;float:left;background-color:blue; }
			section#treintainueve{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cuarenta{width: 100px;height: 100px;float:left;background-color:blue; }

			section#cuarentaiuno{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cuarentaidos{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cuarentaitres{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cuarentaicuatro{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cuarentaicinco{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cuarentaiseis{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cuarentaisiete{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cuarentaiocho{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cuarentainueve{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cincuenta{width: 100px;height: 100px;float:left;background-color:orange; }

			section#cincuentaiuno{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cincuentaidos{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cincuentaitres{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cincuentaicuatro{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cincuentaicinco{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cincuentaiseis{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cincuentaisiete{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cincuentaiocho{width: 100px;height: 100px;float:left;background-color:blue; }
			section#cincuentainueve{width: 100px;height: 100px;float:left;background-color:orange; }
			section#sesenta{width: 100px;height: 100px;float:left;background-color:blue; }

			section#sesentaiuno{width: 100px;height: 100px;float:left;background-color:blue; }
			section#sesentaidos{width: 100px;height: 100px;float:left;background-color:orange; }
			section#sesentaitres{width: 100px;height: 100px;float:left;background-color:blue; }
			section#sesentaicuatro{width: 100px;height: 100px;float:left;background-color:orange; }
			section#sesentaicinco{width: 100px;height: 100px;float:left;background-color:blue; }
			section#sesentaiseis{width: 100px;height: 100px;float:left;background-color:orange; }
			section#sesentaisiete{width: 100px;height: 100px;float:left;background-color:blue; }
			section#sesentaiocho{width: 100px;height: 100px;float:left;background-color:orange; }
			section#sesentainueve{width: 100px;height: 100px;float:left;background-color:blue; }
			section#setenta{width: 100px;height: 100px;float:left;background-color:orange; }

			section#setentaiuno{width: 100px;height: 100px;float:left;background-color:orange; }
			section#setentaidos{width: 100px;height: 100px;float:left;background-color:blue; }
			section#setentaitres{width: 100px;height: 100px;float:left;background-color:orange; }
			section#setentaicuatro{width: 100px;height: 100px;float:left;background-color:blue; }
			section#setentaicinco{width: 100px;height: 100px;float:left;background-color:orange; }
			section#setentaiseis{width: 100px;height: 100px;float:left;background-color:blue; }
			section#setentaisiete{width: 100px;height: 100px;float:left;background-color:orange; }
			section#setentaiocho{width: 100px;height: 100px;float:left;background-color:blue; }
			section#setentanueve{width: 100px;height: 100px;float:left;background-color:orange; }
			section#ochenta{width: 100px;height: 100px;float:left;background-color:blue; }
			
			section#ochentaiuno{width: 100px;height: 100px;float:left;background-color:blue; }
			section#ochentaidos{width: 100px;height: 100px;float:left;background-color:orange; }
			section#ochentaitres{width: 100px;height: 100px;float:left;background-color:blue; }
			section#ochentaicuatro{width: 100px;height: 100px;float:left;background-color:orange; }
			section#ochentaicinco{width: 100px;height: 100px;float:left;background-color:blue; }
			section#ochentaiseis{width: 100px;height: 100px;float:left;background-color:orange; }
			section#ochentaisiete{width: 100px;height: 100px;float:left;background-color:blue; }
			section#ochentaiocho{width: 100px;height: 100px;float:left;background-color:orange; }
			section#ochentainueve{width: 100px;height: 100px;float:left;background-color:blue; }
			section#noventa{width: 100px;height: 100px;float:left;background-color:orange; }
			
			
			section#noventaiuno{width: 100px;height: 100px;float:left;background-color:orange; }
			section#noventaidos{width: 100px;height: 100px;float:left;background-color:blue; }
			section#noventaitres{width: 100px;height: 100px;float:left;background-color:orange; }
			section#noventaicuatro{width: 100px;height: 100px;float:left;background-color:blue; }
			section#noventaicinco{width: 100px;height: 100px;float:left;background-color:orange; }
			section#noventaiseis{width: 100px;height: 100px;float:left;background-color:blue; }
			section#noventaisiete{width: 100px;height: 100px;float:left;background-color:orange; }
			section#noventaiocho{width: 100px;height: 100px;float:left;background-color:blue; }
			section#noventainueve{width: 100px;height: 100px;float:left;background-color:orange; }
			section#cien{width: 100px;height: 100px;float:left;background-color:blue; }

	</style>
</head>
<body>
	<header>
		<section id="uno">1</section>
		<section id="dos">2</section>
		<section id="tres">3</section>
		<section id="cuatro">4</section>
		<section id="cinco">5</section>
		<section id="seis">6</section>
		<section id="siete">7</section>
		<section id="ocho">8</section>
		<section id="nueve">9</section>
		<section id="diez">10</section>
	</header>
	<header>
		<section id="once">11</section>
		<section id="doce">12</section>
		<section id="trese">13</section>
		<section id="catorce">14</section>
		<section id="quince">15</section>
		<section id="diesiseis">16</section>
		<section id="diesisiete">17</section>
		<section id="diesiocho">18</section>
		<section id="diesinueve">19</section>
		<section id="veinte">20</section>
	</header>
	<header>
		<section id="veintiuno">21</section>
		<section id="veintidos">22</section>
		<section id="veintitres">23</section>
		<section id="veinticuatro">24</section>
		<section id="veinticinco">25</section>
		<section id="veintiseis">26</section>
		<section id="veintisiete">27</section>
		<section id="veintiocho">28</section>
		<section id="veintinueve">29</section>
		<section id="treinta">30</section>
	</header>

	<header>
		<section id="treintaiuno">31</section>
		<section id="treintaidos">32</section>
		<section id="treintaitres">33</section>
		<section id="treintaicuatro">34</section>
		<section id="treintaicinco">35</section>
		<section id="treintaiseis">36</section>
		<section id="treintaisiete">37</section>
		<section id="treintaiocho">38</section>
		<section id="treintainueve">39</section>
		<section id="cuarenta">40</section>
	</header>

	<header>
		<section id="cuarentaiuno">41</section>
		<section id="cuarentaidos">42</section>
		<section id="cuarentaitres">43</section>
		<section id="cuarentaicuatro">44</section>
		<section id="cuarentaicinco">45</section>
		<section id="cuarentaiseis">46</section>
		<section id="cuarentaisiete">47</section>
		<section id="cuarentaiocho">48</section>
		<section id="cuarentainueve">49</section>
		<section id="cincuenta">50</section>
	</header>

	<header>
		<section id="cincuentaiuno">51</section>
		<section id="cincuentaidos">52</section>
		<section id="cincuentaitres">53</section>
		<section id="cincuentaicuatro">54</section>
		<section id="cincuentaicinco">55</section>
		<section id="cincuentaiseis">56</section>
		<section id="cincuentaisiete">57</section>
		<section id="cincuentaiocho">58</section>
		<section id="cincuentainueve">59</section>
		<section id="sesenta">60</section>
	</header>

	<header>
		<section id="sesentaiuno">61</section>
		<section id="sesentaidos">62</section>
		<section id="sesentaitres">63</section>
		<section id="sesentaicuatro">64</section>
		<section id="sesentaicinco">65</section>
		<section id="sesentaiseis">66</section>
		<section id="sesentaisiete">67</section>
		<section id="sesentaiocho">68</section>
		<section id="sesentainueve">69</section>
		<section id="setenta">70</section>
	</header>

	<header>
		<section id="setentaiuno">71</section>
		<section id="setentaidos">72</section>
		<section id="setentaitres">73</section>
		<section id="setentaicuatro">74</section>
		<section id="setentaicinco">75</section>
		<section id="setentaiseis">76</section>
		<section id="setentaisiete">77</section>
		<section id="setentaiocho">78</section>
		<section id="setentanueve">79</section>
		<section id="ochenta">80</section>
	</header>

	<header>
		<section id="ochentaiuno">81</section>
		<section id="ochentaidos">82</section>
		<section id="ochentaitres">83</section>
		<section id="ochentaicuatro">84</section>
		<section id="ochentaicinco">85</section>
		<section id="ochentaiseis">86</section>
		<section id="ochentaisiete">87</section>
		<section id="ochentaiocho">88</section>
		<section id="ochentainueve">89</section>
		<section id="noventa">90</section>
	</header>

	<header>
		<section id="noventaiuno">91</section>
		<section id="noventaidos">92</section>
		<section id="noventaitres">93</section>
		<section id="noventaicuatro">94</section>
		<section id="noventaicinco">95</section>
		<section id="noventaiseis">96</section>
		<section id="noventaisiete">97</section>
		<section id="noventaiocho">98</section>
		<section id="noventainueve">99</section>
		<section id="cien">100</section>
	</header>

</body>
</html>