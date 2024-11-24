<?php
session_start(); // Iniciem la sessió

// Comprovar si el formulari s'ha enviat
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuari = $_POST['username'];
    $contrasenya = $_POST['password'];

    // Comprovar si usuari i contrasenya són iguals
    if ($usuari === $contrasenya) {
        // Guardar el nom de l'usuari a la sessió
        $_SESSION['usuari'] = $usuari;
        // Redirigir a la pàgina protegida
        header("Location: pagina1.php");
        exit;
    } else {
        // Mostrar error si no coincideixen
        echo "<p>Error: L'usuari i la contrasenya han de ser iguals!</p>";
        echo "<a href='index.html'>Torna al login</a>";
    }
}
?>

