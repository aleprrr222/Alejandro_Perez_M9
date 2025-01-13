<?php

$nota = $_GET['nota'];
echo "$nota";

$conn = mysqli_connect("localhost", "alejandro", "alejandro","prova");


if(!$conn){
    echo "No s'ha pogut connectar a la bbdd";
}
else{
    /*$sql="SELECT * FROM usuaris WHERE Notas > $nota"; 
    $query= mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query); 
    echo "Hi ha $rows alumnes amb mes d'un $nota";*/
    $insert_query= "INSERT INTO usuaris(dni, nom, cognom, Notas) VALUES (4402659A,Pacote,Peres, $nota)";
    $query_insert= mysqli_query($conn, $insert_query);
    
}


?>