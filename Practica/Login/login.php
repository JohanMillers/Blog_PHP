<?php session_start();

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda volver a registrar un usuario.

if (isset($_SESSION['usuario'])) {
    header('location: index.php');
    die();
}

$errorres = ' ';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$pass = $_POST['pass'];
    $pass = hash('sha512', $pass);

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=login_practica','root', '');

    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();

    }
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass= :pass');
    $statement->execute(array(
        ':usuario' => $usuario,
        ':pass' => $pass
    ));
    $resultado = $statement->fetch();
    if ($resultado != false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
        
    }else {
        $errorres .= '<li>Datos Incorrectos </li>';

    }


}
	
    


require('views/login-view.php');


?>