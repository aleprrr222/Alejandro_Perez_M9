<?php
session_start();

$conn = mysqli_connect('localhost', 'alejandro', 'pirineus', 'alejandro_perez_iticdesk');

$sql_verificado = "SELECT * FROM usuaris WHERE email=\"$email\" AND contrasenya=\"$password\"";


?> 
	<!DOCTYPE html>
	<html>
	<body style="background-color:rgb(255, 164, 46);">
    
	<h1>Acces</h1>
	<h1> <?php echo $_SESSION["rol"]?></h1>
	<h1> <?php echo $_SESSION["nom"]?></h1>
	<a href=incidencies.php>Anar a incidencies</a>
	<a href=registre_incidencies.php>Anar a registre incidencies</a>

	<a href=logout.php type="submit"  value="Logout"> Logout</a>
	</form>

	</body>
	</html>
    

