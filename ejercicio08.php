<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 8</title>
</head><body>


<h2>Recogida de datos de usuario</h2>
    <form method="get" action="ejercicio08.php">
        <label>Nombre de Usuario</label><input type="text" value="" name="nombre"><br>
        <label>Teléfono</label><input type="text" value="" name="telefono"><br>
        <input type="submit" value="enviar">
    </form>

<?php
    //aprobechamos para ver un par de funciones para el manejo de variables.
    //isset comprueba si una variable está definida y no es null
    //empty comprueba si una variable contiene algún valor distinto de 0 o false
if (isset($_GET) && !empty($_GET['nombre'])) {
        echo "<hr>";
        echo "Datos Recogidos<hr>";
        echo "Nombre de usuario $_GET[nombre]<br>";
        echo "Telefono $_GET[telefono]<hr>";
    //var_dump nos puede ayudar a entender lo que hemos recibido
        var_dump($_GET);
} else {
        echo "<hr>";
        echo "No hemos recibido nada!<hr>";
        var_dump($_GET);
}



?> 


</body></html>