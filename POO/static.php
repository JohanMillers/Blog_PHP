<?php 

/*class Persona {
    public static $dia= "9 de Octubre";  // static te permite a acceder a una clase sin crear una intancia

    public static function saludo($nombre) {
        return 'Hola buen, dia' . $nombre;
    }
}*/


//$johan = new Persona;

class Persona {
    public static $dia= "9 de Octubre";  // static te permite a acceder a una clase sin crear una intancia

    public static function saludo($nombre = null) {
        if($nombre){
           return 'Hola buen, dia' . $nombre;
        }else{
            return 'Hola Buen dia';
        }
        
    }
}

echo Persona::$dia;
echo '<br />';
echo '<br />';

echo Persona::saludo('');





?>