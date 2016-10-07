<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio04.php</title>
</head><body>
<?php

/*ejercicio04.php. Crea dos funciones llamadas mayor y menor.
 Cada una de ellas debe recibir un array numérico y devolver
  el valor mayor y menor respectivamente. */



//inicializar array numerico

$arraynum1 = array(2,4,10,6,8); 

$arraynum2 = array(4,6,2,12,8);




function mayor($arraynum1)
{
    sort($arraynum1);
    foreach ($arraynum1 as $key => $val) { 
        echo "arraynum1[" . $key . "] = " . $val . "<br>"; 
    }

    return $arraynum1[4];
} 


function menor($arraynum2)
{
    sort($arraynum2);
    foreach ($arraynum2 as $key => $val) { 
        echo "arraynum2[" . $key . "] = " . $val . "<br>"; 
    }

    return $arraynum2[0];
} 


echo "El valor mayor de arraynum1 es ".mayor($arraynum1)."<br>";  

echo "El valor menor de arraynum2 es ".menor($arraynum2)."<br>";  



/*

sort()

Es la función más básica para ordenar arrays en PHP. 
Ordena el array de valores menores a mayores. 
Lo vemos con un ejemplo.

//Ordenar desde el menor al mayor 
$alumnos = array("Pepe", "Juan", "Marcelo", "Alberto", "Gerardo"); 
sort($alumnos); 
foreach ($alumnos as $key => $val) { 
    echo "alumnos[" . $key . "] = " . $val . "<br>"; 
}

Que dará como resultado: 
alumnos[0] = Alberto 
alumnos[1] = Gerardo 
alumnos[2] = Juan 
alumnos[3] = Marcelo 
alumnos[4] = Pepe

*/



?> 


</body></html>
