<?php
session_start();

$users = [
    "anna" => "anna",
    "oriol" => "1234",
    "alejandro" => "oriolfeo"
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: pagina1.php");
        exit;
    } else {
        echo "<p>Usuari o contrasenya incorrectes</p>";
    }
}
?>

