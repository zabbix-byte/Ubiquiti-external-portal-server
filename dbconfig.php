<?php

$databaseHost = ''; // IP Server SQL
$databaseName = ''; //Nombre Base de datos a la que se conectara 
$databaseUsername = ''; //Nombre usuario que tenga acceso a leer las tablas del usuario 
$databasePassword = ''; //Contraseña del usuario  

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); //Establecer la conecction con los datos entrantes
?>