<?php

/*
 * Práctica 9:
 * Programación Orientada a Objetos en PHP
 * Clases y Herencia
 *
 * Desarrollo de una clase Unidad que se puede especializar en:
 * - Soldado
 * - Arquero
 *
 * En común tienen Nombre y Puntos de Vida(Sangre)
 * Debe haber dos métodos comunes Atacar y RecibirDaño
 *
 * */

abstract class Unidad
{
    protected $sangre = 100;
    protected $nombre;
    protected $arma = "";
    protected $ataque = 0;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getSangre()
    {
        return $this->sangre;
    }

    public function getAtaque()
    {
        return $this->ataque;
    }

    public function atacar(Unidad $objetivo)
    {
        $objetivo->recibirDanio($this->getAtaque());
        echo "<p>$this->nombre ataca a $objetivo->nombre con $this->arma</p>";
    }

    public function recibirDanio($danio)
    {
        $this->sangre -= $danio;
        echo "<p>$this->nombre recibe $danio puntos de daño</p>";
    }

    public function getEstado(){
        if($this->sangre > 0)
            return "Vivo";
        else
            return "Muerto";
    }
}

class Soldado extends Unidad
{
    public function __construct($nombre)
    {
        parent::__construct($nombre);
        $this->arma = "Espada";
        $this->ataque = 5;
    }
}
class Arquero extends Unidad
{
    public function __construct($nombre)
    {
        parent::__construct($nombre);
        $this->arma = "Arco";
        $this->ataque = 10;
    }
}



echo "<h1>Práctica 9: Clases y Herencia</h1>";
$soldado1 = new Soldado("Soldado 1");
$arquero1 = new Arquero("Arquero 1");

$soldado1->atacar($arquero1);

echo "La sangre del arquero es: " . $arquero1->getSangre() . "<br>";

$arquero1->atacar($soldado1);

echo "La sangre del soldado es: " . $soldado1->getSangre() . "<br>";

$arquero1->atacar($soldado1);

echo "Estado del Soldado es: " . $soldado1->getEstado() . "<br>";


$soldado1->tomaBotiquin(80);


?>
