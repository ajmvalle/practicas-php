<html>

<body>
	<?php
	require 'Persona.php'; //Requerir la clase que tiene la clase Persona
	$persona1 = new Persona('Juan', 'Perez', 'Lopez');
	$persona2 = new Persona('Maria', 'Gomez');
	echo $persona1->getNombreCompleto() . " es amigo de " . $persona2->getNombreCompleto() . "<br>";
	?>
</body>

</html>