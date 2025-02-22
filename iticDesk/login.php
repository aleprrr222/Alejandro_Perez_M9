
<?php
session_start();

$email = $_POST['user_log'];
$password = $_POST['pswd'];

$conn = mysqli_connect("localhost", "alejandro", "pirineus", "alejandro_perez_iticdesk");


$sql_verificado = "SELECT * FROM usuaris WHERE email=\"$email\" AND contrasenya=\"$password\"";
$query_verificado = mysqli_query($conn, $sql_verificado);
$rows = mysqli_num_rows($query_verificado);
$result_query_array = mysqli_fetch_array($query_verificado);

if ($rows != 1) {
    header("Location: index.html");
    exit;
} else {
    $_SESSION["user_login"] = $email; 
    $_SESSION["rol"] = $result_query_array["rol"];
    $_SESSION["nom"] = $result_query_array["nom"];
    
    header("Location: acces.php");
    exit;
}
?>


