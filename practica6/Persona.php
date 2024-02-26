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
			return "$this->nombre $this->paterno" . ($this->materno ? " $this->materno" : "");
		}
	}
