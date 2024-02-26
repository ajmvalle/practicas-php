<html>
<head>
	<title>
		Práctica 4
	</title>
</head>
<body>
	<?php
	//Este es un ejemplo de un array
	$numeros = [85, 93, 2, 9, 11, 201];

	//Saber cuántos elementos tiene un array:
	echo "Este array tiene " . count($numeros) . " elementos";

	echo "<br>";

	//Acceder al primer elemento
	echo "Este es el primer elemento del array " . $numeros[0];

	echo "<br>";

	//Acceder al último elemento
	echo "Este es el último elemento del array " . $numeros[count($numeros) - 1];

	echo "<br>";

	//Calcular el mayor elemento del array
	//Se utiliza en este ejemplo un ciclo for y un if
	$mayor = 0;

	for ($i = 0; $i < count($numeros); $i++) {
		if ($numeros[$i] > $mayor) {
			$mayor = $numeros[$i];
		}
	}
	echo " El mayor es: " . $mayor;
	?>


</body>

</html>