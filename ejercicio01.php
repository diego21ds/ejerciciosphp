<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 5</title>
</head><body>
<?php
//inicializamos
echo "Array ordenado inicializado elemento por elemento <hr>";
$array1[0]="elemento 1 ";
$array1[1]="elemento 2 ";
$array1[2]="elemento 3 ";
$array1[3]="elemento 4 ";
$array1[4]="elemento 5 ";


//la podemos recorrer con el bucle foreach de dos maneras:
echo "<hr> Recorrido mediante bucle foreach simple <br>";
foreach ($array1 as $element){
    echo $element . '<br>';
}

//foreach clave->elemento
echo "<hr> Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
} 

?> 

</body></html>
