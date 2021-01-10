<?php
$amigos=array(
    array('Alejandro','20','RD'),#0
    array('Cesar','21','RD'),#1
    array('Luis','19','Mexico')#2
);

echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';

echo 'Fue quien se comio el pan dulce ' . $amigos[2][0];


?>