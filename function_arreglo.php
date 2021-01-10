<?php 
$amigos = array('telefono' =>829-529-4850 ,'nombre' => 'Luis' , 'pais' => 'Rd');

extract($amigos); //Importar variables a la tabla de símbolos actual desde un array
//echo $pais . '<br />';

$semanas = array(
    'lunes','martes','miercoles','jueves',
    'viernes','sabados','domingo'
);


array_pop($semanas); // eliminar la ultima pocision del arrays

/*foreach ($semanas as $dia){
    echo $dia  . '<br />';
}*/
join(',',$semanas);

echo join(' - ',$semanas) .'<br />';




?>