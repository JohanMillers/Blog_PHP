<?php session_start();

# Comprobando si hay una seccion activa
if (isset($_SESSION['usuario'])) {
    require('views/contenido-view.php'); 
}else {
    header('location: login.php');
}



?>