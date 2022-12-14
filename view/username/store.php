<?php
    require_once('/var/www/html/coex/practica_crud/controller/usernameController.php');
    $obj = new UsernameController();
    $obj->guardar($_POST["nombre"]);
?>