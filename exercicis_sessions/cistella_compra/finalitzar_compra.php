<?php
session_start();

$total_cubatas = $_SESSION['cart']['cubata'] * 5.50;
$total_chupitos = $_SESSION['cart']['chupito'] * 1;
$total = $total_cubatas + $total_chupitos;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resum de Compra</title>
</head>
<body>
    <h1>Resum de la teva compra</h1>
    <ul>
	<li>Cubatas: <?php echo $_SESSION['cart']['cubata']; ?> unitats - <?php echo number_format($total_cubatas, 2); ?> €</li>

        <li>Chupitos: <?php echo $_SESSION['cart']['chupito']; ?> unitats - <?php echo number_format($total_chupitos, 2); ?> €</li>
    </ul>
    <p><strong>Total: <?php echo number_format($total, 2); ?> €</strong></p>
    <form action="confirmar_compra.php" method="POST">
        <button type="submit" name="confirmar">Confirmar compra</button>
    </form>
    <br>
    <a href="index.html">Tornar a la botiga</a>
</body>
</html>

