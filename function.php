<?php 
function saludo($nombre){
    echo "Hola, $nombre";
}

//saludo('Johan');


function suma($numero1,$numero2){
    $resultado = $numero1 + $numero2;
    echo " El resultado de la suma es: $resultado";
}
//suma(10, 5);

function resta($numero1,$numero2){
    $resultado = $numero1 - $numero2;
    return $resultado;
}

//resta(20,15);

/*function addFunction($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
 }
 $return_value = addFunction(10, 20);
 
 echo "Returned value from the function : $return_value";*/

 function multiplicar($num1, $num2){
     $multi = $num1 * $num2;
     return $multi;
 }
 $return_value = multiplicar(10, 5);

 echo " El return de la funcion es: $return_value";




?>