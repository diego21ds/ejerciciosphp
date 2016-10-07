<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio07.php</title>
</head><body>
<?php

require_once 'Rectangulo.php';

$rectangulo = new Rectangulo(20, 12);

echo 'El get de base es ' .$rectangulo->getBase(). '<br>';
echo 'El get de altura es ' .$rectangulo->getAltura(). '<br>';


echo 'El perimetro del rectangulo es ' .$rectangulo->perimetro(). '<br>';
echo 'La superficie del rectangulo es ' .$rectangulo->superficie(). '<br>';



$rectangulo->setBase(15);
$rectangulo->setAltura(10);

echo 'El get de base es ' .$rectangulo->getBase(). '<br>';
echo 'El get de altura es ' .$rectangulo->getAltura(). '<br>';


echo 'El perimetro del rectangulo es ' .$rectangulo->perimetro(). '<br>';
echo 'La superficie del rectangulo es ' .$rectangulo->superficie(). '<br>';








/*

Ejercicio7.php y Rectangulo.php

Crea una clase Rectangulo con dos atributos.
base y altura. Debe incluir los métodos:
- constructor
-perimetro
-superficie
-añade tambien los getters y setters
En el fichero Ejercicio7 debes crear un
ejemplar de la clase anterior y usar los
métodos disponibles. La variedad de pruebas

*/












?> 


</body></html>