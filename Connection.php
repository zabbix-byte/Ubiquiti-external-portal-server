<?php

session_start();

include("dbconfig.php"); // importar conexion MYSQL

if(isset($_POST['sub'])) //Condicion de verificacion de usuario en la base de datos .
{
$usuario = $_POST['usuario'];  
$contrasena = $_POST['contrasena'];

$res = mysqli_query($mysqli,"select* from cuentas where usuario='$usuario'and contrasena='$contrasena'");
$result=mysqli_fetch_array($res);
if($result)
{

echo "<h1>Ya tienes acceso a la red , Espere porfavor .. </h1>";
$mac = $_SESSION["id"]; //Optener MAC de dispositivo entrante
$ap = $_SESSION["ap"]; //Optener la MAC del ap que se conecta

require __DIR__ . '/vendor/autoload.php';

$duration = 30; // Timpo en minitos de acceso a la red 10 = 10 min
$site_id = ''; // ID site muy importante 

$controlleruser     = ''; //usuario controlador
$controllerpassword = ''; //Contraseña controlador
$controllerurl      = '';//URL completa del controlador 
$controllerversion  = ''; // Version controlador ex 10.30.2
$debug = false; //Modo debug

$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

$auth_result = $unifi_connection->authorize_guest($mac, $duration, $up = null, $down = null, $MBytes = null, $ap); //funccion autorizacion GUEST
sleep(1);
}
else
{
	echo "<h1> El usuario o la contraseña no coinciden </h1>";
}
}

?>