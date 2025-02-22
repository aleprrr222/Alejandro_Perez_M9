<?php
session_start();

if (!isset($_SESSION["user_login"])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION["user_login"];
$rol = $_SESSION["rol"];
$conn = mysqli_connect("localhost", "alejandro", "pirineus", "alejandro_perez_iticdesk");

    $prioritat = $_POST["prioritat"];
    $titol = $_POST["titol"];
    $descripcio = $_POST["descripcio"];
    $estat = $_POST["estat"];
    $data = date("Y-m-d H:i:s");
    

    $insert = "INSERT INTO incidencies (estatprioritat, titol, descripcio, estat_incidencia, usuari_email, data) 
               VALUES ('$prioritat', '$titol', '$descripcio', '$estat', '$email', '$data')";

    $query = mysqli_query($conn, $insert);


?>

<!DOCTYPE html>
<html>
    <body>
        <h1> <?php echo $_SESSION["rol"]; ?> </h1>
        <h1> <?php echo $_SESSION["nom"]; ?> </h1>

        <form method="POST" action="registre_incidencies.php">
            <label>Prioritat:</label>
            <select name="prioritat" required>
                <option value="I">Tipus I critica</option>
                <option value="II">Tipus II urgent</option>
                <option value="III">Tipus III lleu</option>
                <option value="IV">Tipus IV no urgent</option>
            </select><br>

            <label>Titol:</label>
            <input type="text" name="titol" required><br>

            <label>Descripcio:</label>
            <textarea name="descripcio" required></textarea><br>

            <label>Estat:</label>
            <select name="estat" required>
                <option value="Oberta">Oberta</option>
                <option value="Gestio">Gestio</option>
                <option value="Tancada">Tancada</option>
                <option value="Reoberta">Reoberta</option>
            </select><br>

            <input type="submit" value="Registrar Incidència">
        </form>
        

        <form action="acces.php" method="get">
            <button type="submit">Volver a Acces</button>
        </form>
    </body>
</html>
