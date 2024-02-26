<?php

abstract class Unit{
	protected $name = "";
	protected $salud = 100;

	public function __construct($p_name)
	{
		$this->name = $p_name;
	}

	abstract public function attack($opponent);	

}

class Soldier extends Unit{

	protected $weapon = "Espada";


	public function attack($opponent)
	{
		echo $this->name . ' ataca a ' . $opponent. ' con '. $this->weapon;
	}

	public function setWeapon($new_weapon)
	{

		$this->weapon = $new_weapon;
	}

}



$unidad1 = new Soldier("Soldado 1");

$unidad1->setWeapon("Navaja");

$unidad1->attack("Aldeano");



?>