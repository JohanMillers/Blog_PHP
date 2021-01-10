<?php
# Los arreglos son como variables que nos permite guardar multiples valores.

#Ejemplos de un arreglo con los dias de las semana.
#En los arreglos podemos guardar cualquier tipo de cosa.
$semana=array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingos');
$semana[7]='Millers';
//echo $semana[7];

#Otras forma en la cual podemos definir los arreglos
$arreglo=['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingos'];

//echo $arreglo[3];
echo $semana[0] . '<br />'; //<br /> Esto lo que no indica es un salto de linea
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';

?>