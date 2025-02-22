<?php
session_start();

if (!isset($_SESSION['user_login'])) {
    header("Location: login.php");
    exit;
}

$conn = mysqli_connect('localhost', 'alejandro', 'pirineus', 'alejandro_perez_iticdesk');

$email = $_SESSION['user_login'];
$sql = "SELECT * FROM incidencies WHERE usuari_email = '$email' ORDER BY estatprioritat, data";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Incidencies</title>
</head>
<body>

    <h1> <?php echo $_SESSION["rol"]; ?> </h1>
    <h1> <?php echo $_SESSION["nom"]; ?> </h1>

    <h2>Incidencies</h2>
    
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo 'Num de referencia: ', $row["num_referencia"], '<br>';
        echo 'Prioritat: ', $row["estatprioritat"], '<br>';
        echo 'Titol: ', $row["titol"], '<br>';
        echo 'Descripcio: ', $row["descripcio"], '<br>';
        echo 'Estat: ', $row["estat_incidencia"], '<br>';
        echo 'Data: ', $row["data"], '<br><br>';
    }
    ?>

    <a href="acces.php"> <button>Tornar</button></a>

</body>
</html>

