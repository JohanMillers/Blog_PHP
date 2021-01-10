<?php 

class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    public $pais;

    public function mostrarinformacion()
    {
        echo $this->nombre . ' tiene ' .$this->edad. ' años de edad y vive en '. $this->pais;
    }
}


$johan = new Persona;
$johan->nombre = 'Johan Oscar';
$johan->edad = 25;
$johan->pais ='Republica Dominicana';


$johan->mostrarinformacion();

echo '<br/>';


$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->apellido = 'Perez';
$carlos->edad = 30;
$carlos->pais = 'Salvador';



$gabriela = new Persona;
$gabriela->nombre = 'Gabriela';
$gabriela->apellido = 'Caldonio';
$gabriela->edad = 22;
$gabriela->pais = 'Salvador';

$gabriela->mostrarinformacion();






?>