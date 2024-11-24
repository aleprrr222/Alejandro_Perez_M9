<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina 1</title>
</head>
<body>
    <h1>Benvingut/da a la pàgina 1, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

