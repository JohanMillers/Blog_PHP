<?php 
try{
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion','root',''); // estableciendo conexion con la base de datos

}catch(PDOException $e) {
    echo " ERROR: " . $e->getMessage();
    die();
}
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 5 ;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;  // calculo de pagina

$articulos = $conexion ->prepare(
    "SELECT SQL_CALC_FOUND_ROWS * FROM articulos  
    LIMIT $inicio, $postPorPagina
    ");

$articulos->execute();
$articulos = $articulos->fetchAll();


if (!$articulos) {
    header('locaction: index.php');
}
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

$numeroPaginas = ceil($totalArticulos/ $postPorPagina); // ceil esta funcion redonea un numero hacia arriba.

require 'index-view.php';
?>