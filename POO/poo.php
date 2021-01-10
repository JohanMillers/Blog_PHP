<?php 
class persona {  // esto es una clase
    public $nombre; // la variable dentro de una clase se le conocer como propiedades
    public $apellido;
    public $edad;
    public $pais;

    public function mostrarinformacion(){  // La funcion dentro de una clase se le llama metodos
        echo 'Hola Mundo!';
    }
}

$johan = new persona;
$johan ->nombre = 'Johan Oscar';
$johan ->apellido = 'Millers';
$johan ->edad = 25;
$johan ->pais = 'Republica Dominicana';

//$johan ->mostrarinformacion();

echo $johan->nombre. ' Tiene '. $johan->edad . ' a;os de edad y vive en '. $johan->pais;

$carlos = new persona;
$carlos ->nombre = 'Carlos';
$carlos ->apellido = 'Morales';
$carlos ->edad = 30;
$carlos ->pais = 'Mexico';







?>

