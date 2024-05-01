<?php
require_once ('../models/Pais.php');

try {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $capital = $_POST['capital'];
    $moneda = $_POST['moneda'];
    $ave = $_POST['ave'];
    $arbol = $_POST['arbol'];

    Pais::actualizar($id, $nombre, $capital, $moneda, $ave, $arbol);
} catch (Exception $e) {
    echo "Error: {$e->getMessage()}";
}

header('location:http://localhost/ejemplo-web/');