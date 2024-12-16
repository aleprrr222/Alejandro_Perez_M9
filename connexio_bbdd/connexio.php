<?php


$conn = mysqli_connect("localhost", "alejandro","alejandro", "prova");

if(!$conn){
    echo "Error: No se pudo conectar a MySQL."  . mysqli_connect_error();
    }
else{

    echo "OK";
}
$query = mysqli_query($conn, "SELECT * FROM usuaris");

$query = mysqli_query($conn, " INSERT INTO usuaris (dni,nom,cognom) VALUES ('41016592W','Pol','Perez')");

?>
