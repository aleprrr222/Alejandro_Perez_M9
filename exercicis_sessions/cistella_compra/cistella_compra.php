<?php
session_start(); 

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [
        'cubata' => 0,
        'chupito' => 0
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    
    $cubata_num = isset($_POST['cubata_num']) ? intval($_POST['cubata_num']) : 0;
    $chupito_num = isset($_POST['chupito_num']) ? intval($_POST['chupito_num']) : 0;

  
    $_SESSION['cart']['cubata'] += $cubata_num;
    $_SESSION['cart']['chupito'] += $chupito_num;
}

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cistella de Compra</title>
</head>
<body>
    <h1>Cistella de Compra</h1>
    <p>Has afegit els següents productes:</p>
    <ul>
        <li>Cubates: <?php echo $_SESSION['cart']['cubata']; ?> unitats</li>
        <li>Chupitos: <?php echo $_SESSION['cart']['chupito']; ?> unitats</li>
    </ul>
    <a href="index.html">Afegir més productes</a><br>
    <a href="finalitzar_compra.php">Finalitzar compra</a>
</body>
</html>

