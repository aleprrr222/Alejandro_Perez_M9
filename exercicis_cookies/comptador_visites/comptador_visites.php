<?php
session_start();

if (isset($_COOKIE['visites'])) {
    $visites = $_COOKIE['visites'] + 1;
} else {
    $visites = 1;
}

setcookie('visites', $visites, time() + (86400 * 30));


$descompte = 0;
if ($visites >= 10) {
    $descompte = 50;
} elseif ($visites >= 5) {
    $descompte = 20;
}


echo "<h1>Has visitat aquesta pàgina $visites vegades.</h1>";
if ($descompte > 0) {
    echo "<p>Tens un descompte del $descompte% en la teva compra!</p>";
}
?>

<form method="post">
    <label for="descompte">Codi de descompte:</label>
    <input type="text" name="descompte" id="descompte">
    <button type="submit">Compra</button>
</form>

