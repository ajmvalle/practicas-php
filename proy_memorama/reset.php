<?php

// Comenzar la sesión si aún no se ha iniciado
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['cards'] = null;


header('Location: index.php'); // Redirigir al usuario a la página principal
exit; // Asegura que no se ejecute más código después de la redirección
