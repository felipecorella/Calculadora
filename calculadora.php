<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Calculadora de conjuntos">
		<meta name="keywords" content="Teoría de conjuntos, conjuntos,calculadora">
		<meta name="author" content="Mario Felipe Corella Marquez">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Calculadora de conjuntos</title>
		<link rel="stylesheet" href="css/estilos.css">
		<script src="js/funciones.js"></script>
	</head>
	<body>
		<h1>Calculadora de conjuntos</h1>
		<button id="btn_ayuda" class="btn_ayuda">Ayuda</button>
		<div id="div_ayuda" class="ayuda" hidden>
			<p>Están soportadas las siguientes operaciones:</p>
			<ul>
				<li>Unión</li>
				<li>Intersección</li>
				<li>Diferencia</li>
				<li>Diferencia simétrica</li>
				<li>Complemento</li>
				<li>Producto cartesiano</li>
			</ul>
			<p>
				¿Cómo se usa?<br>
				Primero define los conjuntos y luego realiza las operaciones. Solo se pueden definir conjuntos por extensión. Se debe definir un conjunto por línea.<br><br>
				Ej.:<br>
			</p>
<div class="cont_ej">
<pre class="borde">
A={1,2,3,4}
B={5,6,7,8}
C={3,4,5,6}
A∪B
B∩C
(A∪C)∖B
</pre>
</div>
			<p>
				Cuando termines presiona el botón «Calcular».
				
				Por defecto se crea el conjunto «vacío» y el conjunto «Universo» (la letra «U»  está reservada para el «Universo»).<br>
				El «Universo» tiene el contenido de todos los conjuntos que hayas creado.<br>
				Tomando el ejempo anterior, el universo sería: U={1,2,3,4,5,6,7,8}.<br>
				También puedes agregar elementos que solo estarán en el «Universo».<br><br>
				Ej.:<br>	
			</p>
<div class="cont_ej">
<pre class="borde">
A={1,2,3,4}
B={5,6,7,8}
C={3,4,5,6}
U={10,11}
</pre>
	</div>
			<p>
				El «Universo» sería: U={1,2,3,4,5,6,7,8,10,11}.
			</p>
		</div>
		<form id="form_conjuntos" action="analizar.php" method="post">
			<label id="card" class="borde">
				<input type="checkbox" name="card" id="card" value="true">
				Mostrar cardinalidad
			</label>
			<label id="orden" class="borde">
				<input type="checkbox" name="orden" id="orden" value="true">
				Ordenar elementos
			</label>
			<textarea id="f" name="f" class="borde" required></textarea>
			<div id="botones" class="borde">
				<div class="bloque">
					<button class="borde" id="btn1" type="button">{</button><button class="borde" id="btn2" type="button">}</button><button class="borde" id="btn19" type="button">(</button><button class="borde" id="btn20" type="button">)</button>
					<button class="borde a_la_derecha" id="btn3" type="button">,</button>
					<button class="borde a_la_derecha" id="btn21" type="button">;</button>
				</div>
				<div class="bloque">
					<button class="borde" id="btn4" type="button">A</button><button class="borde" id="btn5" type="button">B</button><button class="borde" id="btn6" type="button">C</button><button class="borde" id="btn7" type="button">D</button><button class="borde" id="btn10" type="button">∅</button><button class="borde" id="btn18" type="button">U</button>
					<button class="borde a_la_derecha" id="btn17" type="button">=</button>
				</div>
				<div class="bloque">
					<button class="borde" id="btn11" type="button">∩</button><button class="borde" id="btn12" type="button">∪</button><button class="borde" id="btn13" type="button">∖</button><button class="borde" id="btn15" type="button">∁</button><button class="borde" id="btn14" type="button">∆</button><button class="borde" id="btn16" type="button">×</button>
					<button id="btn22" class="borde a_la_derecha" type="button">⏎</button>
				</div>
				<div class="bloque">
					<button id="btnsub" type="submit" class="borde a_la_derecha">Calcular</button>
				</div>
			</div>
		</form>
			<hr>
	<footer>
	Mario Felipe Corella Marquez
	</footer>	</body>
</html>
