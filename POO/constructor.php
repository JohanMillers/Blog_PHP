<?php 
//definicion de la clase
class Persona {
    //Atributos
    public $nombre;
    public $apellido;
    public $edad;
    public $pais;
//Constructor
    function __construct($nombre, $apellido, $edad, $pais) // metodos constructor
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
//Metodos
    public function mostrarinformacion()
    {
        echo $this->nombre . ' tiene ' .$this->edad. ' años de edad y vive en '. $this->pais;
    }
}

$johan = new Persona('Johan Oscar','Millers', 25, 'Republica Dominicana');


$johan->mostrarinformacion();

echo '<br/>';


$carlos = new Persona('Carlos Arturo','Perez', 30, 'Mexico');

$carlos->mostrarinformacion();

echo '<br />';

$gabriela = new Persona('Gabriela','Caldonio',22,'Salvador');

$gabriela->mostrarinformacion();








?>