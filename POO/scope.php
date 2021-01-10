<?php
//public 
//Puede ser accedidar desde cualquier parte ya sea dentro o fuera de la clase.


//Protected
//Puede ser accedidar dentro de la clase y otras clase que fueron heredaron. pero no fuera de esta.


//Private
//Solo puede ser accedidar dentro de la clase en la fueron creadas.
//Es decir que no podemos acceder a ella desde otra clase que heredor  y tampoco podemos acceder desde fuera de la clase.




//Definicion de la Clase
class Usuario{
    //Atributos
    public $nombre;
    protected $correo;
//Constructor
    function __construct($nombre, $correo) 
    {
       $this->nombre = $nombre;
       $this->correo = $correo; 
    }
    //Metodos
    public function mostrarinfo(){
        return $this->correo;
    }
}class Miembro extends Usuario {
    public function mostrarcorreo(){
        return 'Este es el coreo: '. $this->correo;
    }

}

$johan = new Miembro('Johan Oscar', 'Johanoscarmarte@gmail.com');











?>