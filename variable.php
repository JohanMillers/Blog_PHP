<?php
/*
boolean: almacenan valores verdadero o falso (true / false).
integer: números enteros.
float: números con decimales, usando el punto como separador decimal.
string: cadenas de texto. 
*/

#String: Cadena de texto
$nombre="Johan";

#integer: Numero entero
$numero=7;

#Float O Double: Numero con decimales
$numero_decimales= 7.7;

#Boolean: Verdadero o Falso (True / false)
$verdadero= false;

#Array: Arreglo
#Object: Objecto
#Class: Clase
#Null: cuando a una variable aun no se le ha asignado nungun valor

$edad;
#Para concatenar variable en PHP lo hacermos con el punto (.)

echo 'Hola, '. $nombre;

# Para saber de que tipo es una variale utilizarmos Gettype.

echo gettype($verdadero);


?>