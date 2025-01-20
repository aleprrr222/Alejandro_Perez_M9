<?php

$nota = $_GET['nota'];
echo "$nota";

$conn = mysqli_connect("localhost", "alejandro", "alejandro","prova");


if(!$conn){
    echo "No s'ha pogut connectar a la bbdd";
}
else{
    $sql = "SELECT * FROM usuaris WHERE Notas > 5";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
        echo "Nom: " . $row['nom'] . ", Cognom: " . $row['cognom'] . ", Nota: " . $row['Notas'] . "<br>";
    }
    $result = mysqli_fetch_array($query);
    #$rows = mysqli_num_rows($query); 
    #echo "Hi ha $rows alumnes amb mes d'un $nota";*/
    #$insert_query= "INSERT INTO usuaris(dni, nom, cognom, Notas) VALUES (4401659A,Misco,Peres, $nota)";
    #$query_insert= mysqli_query($conn, $insert_query);
    #$affected_rows= mysqli_affected_rows($conn);
    #echo "Hi ha $affected_rows afactacio  a la bbdd";
}


?>