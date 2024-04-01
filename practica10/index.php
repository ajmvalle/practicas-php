<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Práctica 10</title>
</head>
<body>

	<h1>Práctica 10: Elementos HTML</h1>

	<p>En esta práctica repasaremos algunas de las etiquetas más importantes de HTML pero usando PHP para escribirlas.</p>


	<h1>Títulos: </h1>
	<?php
	echo "<h1>Este es un título H1</h1>";
	echo "<h2>Este es un título H2</h2>";
	echo "<h3>Este es un título H3</h3>";
	echo "<h4>Este es un título H4</h4>";
	?>

	<h1>Párrafo: </h1>
	<?php
	echo "<p>Este es un elemento párrafo (paragraph)</p>";
	?>

	<h1>Enlace: </h1>
	<?php
	echo "<a href='https://www.google.com' >Este es un enlace (anchor tag)</a>";
	?>
</body>
</html>