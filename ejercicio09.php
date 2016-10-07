<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio09.php</title>
</head><body>
<?php


require_once 'ejercicio09/Usuario.php';
class App
{
    private $_usuario;

    function __construct()
    {
        echo 'En App';
        if(isset($_GET) && (empty($_GET))
        {
        $this->_usuario = new Usuario($_GET['nombre'],$_GET['telefono']);
        echo "$this->_usuario";
        }
    }
}












?> 


</body></html>