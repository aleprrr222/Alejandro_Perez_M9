
<html lang="ca"> <!--Idioma catala--!>
<head>
    <meta charset="UTF-8">
    <title>Botiga de Vins Aperez</title>
</head>
<body>
    <h1>Botiga de Vins Aperez</h1>
    <!-- Formulari on l'usuari posa les dades -->
    <form action="bodega.php" method="post">
        <p>Ets major d'edat?</p>
        <label><input type="radio" name="majoredat" value="si" required> Sí</label>
        <label><input type="radio" name="majoredat" value="no"> No</label><br><br>

        <p>Selecciona l'idioma:</p>
        <select name="idioma" required>
            <option value="ca">Català</option>
            <option value="es">Español</option> <!--Selecciona un idioma--!>
            <option value="en">English</option>
        </select><br><br>

        <p>Selecciona la moneda:</p>
        <select name="moneda" required>
            <option value="EUR">Euros (€)</option>
            <option value="GBP">Lliures (£)</option> <!--Selecciona la moneda--!>
            <option value="USD">Dòlars ($)</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
