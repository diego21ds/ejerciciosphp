<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 9</title>
</head><body>
<?php


require_once 'Usuario.php';
class App
{
    private $_usuario;

    function __construct()
    {
        echo 'En App';
        if(isset($_GET) && !empty($_GET))
        {
        $this->_usuario = new Usuario($_GET['nombre'],$_GET['telefono']);
//        echo "$this->_usuario";
        }
    }


    public function mostrar()
    {   


    }



}












?> 


</body></html>