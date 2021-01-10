<?php 

abstract class Persona {   //abstract lo que hacer es proteger la clase para que no se pueda hacerde a ella al meno que se hedere 
    public function saludo(){
        return ' Hola Johan! TKM';
    }
}

class Estudinates extends Persona {

}


$johan = new Estudinates; // instancia: Se llama instancia a todo objeto que derive de algún otro. De esta forma, todos los objetos son instancias de algún otro, menos la clase Object que es la madre de todas
echo $johan->saludo();

?>