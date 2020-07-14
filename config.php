<?php

session_start();


$_SESSION["id"] = $_GET["id"]; // Optener MAC dispositivo
$_SESSION["ap"] = $_GET["ap"]; // Optener MAC AP al que se esta conectando el dispositivo 

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Portal WIFI</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="assets/css/foundation.css"> <!-- Libreria Fundation CSS -->

    </head>
    <body>
	    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-4 cell">
                <div class="callout">
<h2>Bienvenido!</h2>

		<form method="post" action="Connection.php" name="signin-form"> <!-- Muy importante que el form tenga action = "Connection.php"-->
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="contrasena" required />
    </div>
    <button type="submit" name="sub" value="login" class="button">Iniciar sesión</button>
</form>
</div>
</div>
</div>
</div>

<!-- Libreria Fundation JS -->
<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
    </body>
</html>