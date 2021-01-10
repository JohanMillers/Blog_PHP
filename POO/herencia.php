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
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->pais = $pais;
    }
//Metodos
    public function mostrarinformacion()
    {
        return $this->nombre . ' tiene ' .$this->edad. ' años de edad y vive en '. $this->pais. ' y es '. $this->trabajo;
    }
}
//Herencia
class Estudiantes extends Persona {
    function __construct($nombre,$apellido, $edad, $pais, $carrera ){
        parent::__construct($nombre, $apellido, $edad, $pais); /*Los constructores padres no son llamados implícitamente si la clase hija define un constructor.
                                                            Para ejecutar un constructor padre, se requiere invocar a parent::__construct() desde el constructor hijo */
        $this->carrera = $carrera;
    }         
}

class Trabajador extends Persona {
    function __construct($nombre, $apellido, $edad, $pais, $trabajo){ //Llamo lo atributo padres y sobrescribo los mio
        parent::__construct($nombre, $apellido, $edad, $pais);
        $this->trabajo = $trabajo;
    }  
}





$johan =new Trabajador('Johan Oscar','Millers',25,'Republica Dominicana','Desarrollador Web');

echo $johan-> mostrarinformacion();





?>