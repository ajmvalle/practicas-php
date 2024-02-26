<html>
<head>
	<title>
		Práctica 5: Promedio de un array
	</title>
</head>
<body>
	<?php
	//Calcular el promedio de un array
	$numeros = [85, 93, 2, 9, 11, 201];

	echo "<br>";
	$suma = 0;

	for ($i = 0; $i < count($numeros); $i++) {
		$suma = $suma + $numeros[$i];
	}
	echo "la suma de los numeros es: " . $suma;
	$promedio = $suma / count($numeros);
	echo "<br>";
	echo "el promedio de los numeros es: " . $promedio;

	?>
</body>

</html>