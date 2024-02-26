 <!DOCTYPE html>
 <html>

 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Práctica 8: Palíndromos</title>
 </head>

 <body>

 	<h2>Programa que determina si una palabra es palíndromo</h2>
 	<p>
 		Un palíndromo es una palabra o frase que se puede
 		leerse de izquierda a derecha y de izquiera a derecha
 		Ejemplo: "Anita lava la tina"
 	</p>

 	<?php
		$palabra1 = "CBTIS 190";
		$palabra2 = "RECONOCER";

		function esPalindromo($texto)
		{
			for ($i = 0; $i < strlen($texto); $i++) {

				$letra_actual = $texto[$i];
				$letra_contraria = $texto[strlen($texto) - 1 - $i];

				if ($letra_contraria != $letra_actual)
					return false;
			}
			return true;
		}

		//Resultados:
		echo "$palabra1 " . (esPalindromo($palabra1) ? "Es palíndromo" : "No es palíndromo");
		echo  "<br>";
		echo "$palabra2 " . (esPalindromo($palabra2) ? "Es palíndromo" : "No es palíndromo");

		?>
 </body>

 </html>