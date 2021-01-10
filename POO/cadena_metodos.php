 <?php 
 class Usuario {
     public $nombre;
     public $correo;

     function __construct($nombre, $correo){
         $this->nombre = $nombre;
         $this->correo = $correo;

     } 
     public function mostrarnombre(){
         echo 'Su nombre es:' .$this->nombre . '<br/>';
         return $this;
     }
     public function mostrarcorreo(){
        echo 'Su correo es:' .$this->correo . '<br/>';
        return $this;
    }

 }
 $johan = new Usuario('Johan', 'johanoscarmarte@gmail.com');
 $johan->mostrarnombre()->mostrarcorreo();  // cardena de metodos                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
 
 
 
 ?>