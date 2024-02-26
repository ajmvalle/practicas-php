<html>

<body>
	<?php

	class Persona
	{
		private $nombre;
		private $paterno;
		private $materno;

		public function __construct($nombre, $paterno, $materno = null)
		{
			$this->nombre = $nombre;
			$this->paterno = $paterno;
			$this->materno = $materno;
		}

		public function getNombreCompleto()
		{
			return "$this->nombre $this->paterno" . ($this->materno ? " $this->materno" : "");//Operador ternario
		}
	}


	$persona1 = new Persona('Juan', 'Perez', 'Lopez');
	$persona2 = new Persona('Maria', 'Gomez');

	echo $persona1->getNombreCompleto() . " es amigo de " . $persona2->getNombreCompleto() . "<br>";

	?>
</body>

</html>