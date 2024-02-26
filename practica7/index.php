 <!DOCTYPE html>
 <html>

 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Números Pares e Impares</title>
 </head>

 <body>

 	<h2>Programa que cuenta Pares e impares</h2>

 	<?php

		$numeros = [5, 8, 10, 11, 99, 20, 22, 44, 88];

		$pares = 0;
		$impares = 0;
		for ($i = 0; $i < count($numeros); $i++) {
			if ($numeros[$i] % 2 === 0) {
				$pares++;
			} else {
				$impares++;
			}
		}
		echo "<p>Números pares: $pares</p>";
		echo "<p>Números impares: $impares</p>";
		?>
 </body>

 </html>