<?php
session_start();

$conn = mysqli_connect('localhost', 'alejandroPerezExamM9', 'Admin1234*', 'alejandroPerezExamM9');

if(! $conn){
	echo "Error al connectar amb la BBDD";
	exit();
}

$puntua = $_POST['puntuacio'];
$sql = "SELECT TITULO,PUNTUACION FROM `peliculas` WHERE PUNTUACION > $puntua";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Incidencies</title>
</head>
<body>
<?php
while( $row = mysqli_fetch_array($result)){
    echo 'titulo: ', $row["TITULO"], '<br>';
    echo 'puntuacio:', $row['PUNTUACION'], '<br>';
}

?>
</body>
</html>

