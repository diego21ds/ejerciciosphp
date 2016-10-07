<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio05.php</title>
</head><body>
<?php

/*ejercicio05.php. Paso por referencia. Crea una función que ordene un array de menor a mayor.  */


$arraynum1 = array(2,4,10,6,8); 



function demenoramayor(&$arraynum1)
{
    sort($arraynum1);
    foreach ($arraynum1 as $key => $val) { 
        echo "arraynum1[" . $key . "] = " . $val . "<br>"; 
    }
} 


    demenoramayor($arraynum1);





/*

echo"<pre>";
print_r($array1);
echo"</pre>";

*/

/*

//paso por referencia. El argumento pasado puede ser actualizado
//además en este ejemplo no har retur: no devuelve nada.
function escala(&$base, &$altura, $escala=2)
{
    $base = $base * $escala;
    $altura = $altura * $escala;
} 

*/



?> 




</body></html>
