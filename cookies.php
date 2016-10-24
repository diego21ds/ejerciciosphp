<?php


setcookie($_POST['cookie'], $_POST['valor'], time() + $_POST['duracion']);

var_dump($_COOKIE);

    echo "<ul>";
foreach ($_COOKIE as $nombre => $valor) {
    echo "<li>Cookie $nombre: $valor </li>";
}
    echo "</ul>";