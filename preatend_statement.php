<?php 
$conexion = new mysqli('localhost','Johan','BebaCafe12345','prueba_datos');

if($conexion->connect_errno){
    die('Lo siento hubo un problema con el servidor');
}else{
    $statement = $conexion->prepare("INSERT INTO usuario(ID,nombre,correo,edad) VALUES(?,?,?,?)"); // statement prepare estamos preparando la base de datos para recibir valores
    $statement->bind_param('sssi',$id, $nombre, $correo, $edad );
    $id = NULL;

    if(isset($_GET['nombre']) && isset($_GET['correo']) && isset($_GET['edad'])){
        $nombre = $_GET['nombre'];
        $correo =$_GET['correo'];
        $edad = $_GET['edad'];
    }

    $statement->execute();
    
    if ($conexion->affected_rows >= 1) {
        echo 'Filas agregadas: ' . $conexion-> affected_rows;
    }else{
        echo 'No se agrego nada';
    }
        
    
        


    

    
    
}

?>