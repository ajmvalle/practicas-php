<?php

// Comenzar la sesión si aún no se ha iniciado
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Incluir las clase Card
require_once 'Card.php';

// Obtener el índice de la carta que se ha seleccionado
$indice_seleccionado = $_POST['index'];

$cards = [];

if (isset($_SESSION['cards'])) {
    $cards = unserialize($_SESSION['cards']);
}

$carta_mostrada1 = null;
$indice_mostrada1 = null;

$carta_mostrada2 = null;
$indice_mostrada2 = null;

//Buscar en el grupo de cartas si alguna ya hay cartas mostradas
foreach ($cards as $index => $card) {
    if ($card->getStatus() == "show") {
        if ($carta_mostrada1 == null) {
            $carta_mostrada1 = $card;
            $indice_mostrada1 = $index;
        } else {
            $carta_mostrada2 = $card;
            $indice_mostrada2 = $index;
        }
    }
}

//Escenario 1: no hay cartas mostradas, se muestra la carta seleccionada,
// siempre y cuando sea una carta oculta
if ($carta_mostrada1 == null && $carta_mostrada2 == null) {
    if ($cards[$indice_seleccionado]->getStatus() == "hidden")
        $cards[$indice_seleccionado]->setStatus("show");
}

//Escenario 2: Solo hay una mostrada, mostrar la carta seleccionada
if ($carta_mostrada1 != null && $carta_mostrada2 == null) {
    if ($indice_seleccionado != $indice_mostrada1) {
        //Si la carta seleccionada es igual a la mostrada, se quedan como encontradas
        if ($cards[$indice_seleccionado]->getId() == $cards[$indice_mostrada1]->getId()) {
            $cards[$indice_seleccionado]->setStatus("found");
            $cards[$indice_mostrada1]->setStatus("found");
        } else {
            //Se muestra la segunda carta seleccionada
            // Siempre y cuando sea una carta oculta
            if ($cards[$indice_seleccionado]->getStatus() == "hidden")
                $cards[$indice_seleccionado]->setStatus("show");
        }
    }
}

//Escenario 3: Si hay dos cartas mostradas, comparar y decidir si se quedan mostradas o se ocultan
if ($carta_mostrada1 != null && $carta_mostrada2 != null) {
    if ($carta_mostrada1->getId() == $carta_mostrada2->getId()) {
        $cards[$indice_mostrada1]->setStatus("found");
        $cards[$indice_mostrada2]->setStatus("found");
    } else {
        $cards[$indice_mostrada1]->setStatus("hidden");
        $cards[$indice_mostrada2]->setStatus("hidden");
    }
}


// Guardar el grupo de cartas en la sesión
$_SESSION['cards'] = serialize($cards);


header('Location: index.php'); // Redirigir al usuario a la página principal
exit; // Asegura que no se ejecute más código después de la redirección
