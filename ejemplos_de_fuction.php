<?php 
function calcular($base, $altura){
    $result = ($base * $altura) / 2;
    return $result;

}
$return_value = calcular(10,5); // creer una variable y almacener mi funcion y el valor de misma se guardo en ella

 echo " El triagulo tiene $return_value" .' Metros cuadrado'; // llame mi fuction
?>