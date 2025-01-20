<?php
session_start();

if (!isset($_SESSION['visites'])) {
    $_SESSION['visites'] = 0;
}
$_SESSION['visites']++;

$logat = isset($_SESSION['username']) ? true : false;

?>

<header>
    <?php if ($_SESSION['visites'] % 2 == 0): ?>
        <h1>Benvingut de nou, esperem que tingui un bon dia</h1>
    <?php else: ?>
        <h1>Benvingut, és un plaer que ens visitis</h1>
    <?php endif; ?>

    <?php if ($logat): ?>
        <p>Benvingut, <?php echo $_SESSION['username']; ?>!</p>
    <?php endif; ?>

    <?php if ($_SESSION['visites'] == 20 && !$logat): ?>
        <p> utilitzi el codi PROMO24 per un 20% de descompte</p>
    <?php elseif ($_SESSION['visites'] == 10 && $logat): ?>
        <p><?php echo $_SESSION['username']; ?>, agraïm la seva fidelitat, utilitzi el codi PROMO24 per un 30% de descompte</p>
    <?php endif; ?>
</header>

