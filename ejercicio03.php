<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio03.php</title>
</head><body>
<?php

/*Ejercicio03.php. Crea una array asociativo con las cinco posiciones. En cada posición debes almacenar uno o más jugadores en un array ordenado. Muestra toda la plantilla usando listas no ordenadas html (ul y li) */

//inicializamos
echo '<h2>Arrays asociativos</h2>';


$array1 = array (
    'base' => array('Pedro','Carlos'),
    'escolta' => array('Manuel','Javier'),
    'alero' => array('Daniel','Ruben'),
    'alapivot' => array('Alberto','Rafa'),
    'pivot' => array('Leandro','Andrés'),	
); 



//foreach clave->elemento
echo "Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $key => $nombres){
	echo "Posición $key";
	foreach ($nombres as $nombre){
    echo  "<li>" . $nombre . '</li><br>';
	}
}

echo"<pre>";
print_r($array1);
echo"</pre>";
?> 


</body></html>
