<?php
// Ha rebut el formulari per POST i guardem les dades a les cookies
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardem les dades del usuari a cookies
    setcookie('majoredat', $_POST['majoredat'], time() + (86400 * 30), "/");
    setcookie('idioma', $_POST['idioma'], time() + (86400 * 30), "/"); //Indiquem el temps de vida de la cookie
    setcookie('moneda', $_POST['moneda'], time() + (86400 * 30), "/");

    // Assignem les dades a variables locals per utilitzarles
    $majoredat = $_POST['majoredat'];
    $idioma = $_POST['idioma'];
    $moneda = $_POST['moneda'];
} else {
    // Si no hi ha dades del formulari indiquem que utilitzem les cookies
    $majoredat = isset($_COOKIE['majoredat']) ? $_COOKIE['majoredat'] : '';
    $idioma = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'ca';
    $moneda = isset($_COOKIE['moneda']) ? $_COOKIE['moneda'] : 'EUR';
}

// Missatges segons l'idioma seleccionat
if ($idioma == 'ca') {
    $no_major = "No et podem vendre alcohol si ets menor d’edat.";
    $oferta = "T’oferim el vi “Les Terrasses” a un preu de ";
} elseif ($idioma == 'es') {
    $no_major = "No podemos venderte alcohol si eres menor de edad.";
    $oferta = "Te ofrecemos el vino “Les Terrasses” a un precio de ";
} else {
    $no_major = "We cannot sell you alcohol if you are underage.";
    $oferta = "We offer you the wine “Les Terrasses” at a price of ";
}

// Preus segons la moneda
if ($moneda == 'EUR') {
    $preu = 39;
    $simbol = "€";
} elseif ($moneda == 'GBP') {
    $preu = 34;
    $simbol = "£";
} else {
    $preu = 42;
    $simbol = "$";
}
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <title>Botiga de Vins</title>
</head>
<body>

<?php
// Mostrem el missatge adequat segons l'edat i l'idioma
if ($majoredat == 'no') {
    echo "<h1>$no_major</h1>";
} elseif ($majoredat == 'si') {
    echo "<h1>$oferta $preu $simbol</h1>";
} 
?>

</body>
</html>
