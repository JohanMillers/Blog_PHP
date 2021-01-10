<?php
$errores = '';
$enviados = '';

if (isset($_POST['nombre'])) {
   $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  if (!empty($nombre)) {
    $nombre = trim($nombre); // Para eliminar los espacio
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); // Para evitar que el usuario coloque caracter extra;os
  }else {
     $errores .= 'Por Favor ingresa un nombre <br />';
  }

  if (!empty($correo)) {
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); //Remove all illegal characters from an email address

    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {  //Compruebe si la variable $correo es una dirección de correo electrónico válida
      $errores .= 'Por Favor ingresa un correo valido <br />';

    } 
  } else {
    $errores .= 'Por Favor ingresa un correo <br />';
  }

  if(!empty($mensaje)) {
    $mensaje = htmlspecialchars($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = stripslashes($mensaje);
  } else {
    $errores .= 'Por favor ingresa el mensaje <br />';
  }
  if(!$errores) {
    $enviar_a = 'johanoscarmarte@gmail.com';
    $asunto = 'Correo de mi formulario';
    $mensaje_preparado = "De: $nombre \n";
    $mensaje_preparado .= "correo: $correo \n";
    $mensaje_preparado .= "Mensaje:" . $mensaje;

    mail($enviar_a, $asunto, $mensaje_preparado); //
    $enviados = 'true';


  }
}



require 'index-view.php';

?>