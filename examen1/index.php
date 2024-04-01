<!DOCTYPE html>
<html>

<head>
    <title>Examen 1: Potencia</title>
</head>

<body>
    <h1>Potencia</h1>
    <?php
    $numero = 2;
    $potencia = 4;
    $resultado = 1;

    for ($i = 0; $i < $potencia; $i++) {
        $resultado *= $numero;
    }

    echo "El resultado de $numero elevado a la $potencia es: $resultado";
    ?>

    <br>

    <?php 
    $numeros = [2, 3, 3, 2, 5, 2];

    $pares = 0;
    $suma_pares = 0;

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] % 2 == 0) {
            $pares++;
            $suma_pares += $numeros[$i];
        }
    }
    

    $promedio = $suma_pares / $pares;


    echo "Promedio de números pares: $promedio";

    ?>




</body>