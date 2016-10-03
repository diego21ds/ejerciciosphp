<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 5</title>
</head><body>
<?php
//inicializamos
echo "Array ordenado inicializado elemento por elemento <hr>";
$array1[base]="Nacho ";
$array1[escolta]="Javier ";
$array1[alero]="Diego ";
$array1[alapivot]="Carlos ";
$array1[pivot]="Daniel ";



//la podemos recorrer con el bucle foreach de dos maneras:
echo "<hr> Recorrido mediante bucle foreach simple <br>";
foreach ($array1 as $element){
    echo $element . '<br>';
}



echo "<hr> Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
} 

?>
</body></html>
