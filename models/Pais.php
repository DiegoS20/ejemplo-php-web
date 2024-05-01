<?php
require_once (__DIR__ . '/Conexion.php');
class Pais
{
    public static function all()
    {
        $con = Conexion::getInstance();
        $stmt = $con->query('SELECT * FROM paises');
        $paises = $stmt->fetchAll();
        $stmt->closeCursor();
        return $paises;
    }

    public static function findByName(string $query)
    {
        $con = Conexion::getInstance();
        $stmt = $con->prepare('SELECT * FROM paises WHERE nombre LIKE :nombre');
        $stmt->execute([
            ':nombre' => '%' . $query . '%'
        ]);
        $paises = $stmt->fetchAll();
        $stmt->closeCursor();
        return $paises;
    }

    public static function delete(int $id)
    {
        $con = Conexion::getInstance();
        $stmt = $con->prepare('DELETE FROM paises WHERE id_pais = ?');
        $stmt->execute([$id]);
        $stmt->fetchAll();
        $stmt->closeCursor();
    }

    public static function add(string $nombre, string $capital, string $moneda, string $ave, string $arbol)
    {
        $con = Conexion::getInstance();
        $stmt = $con->prepare('INSERT INTO paises (nombre, capital, moneda, ave, arbol) VALUES (?,?,?,?,?)');
        $stmt->execute([$nombre, $capital, $moneda, $ave, $arbol]);
        $stmt->fetchAll();
        $stmt->closeCursor();
    }
}