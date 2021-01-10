<?php session_start();

session_destroy(); # permite al usuario cierre la seccion
$_SESSION = array();
header('location: login.php');
die();

?>