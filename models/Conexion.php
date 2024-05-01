<?php
class Conexion
{
    private static $instance = null;
    private function Conexion()
    {
        try {
            return new PDO('pgsql:host=localhost;port=5432;dbname=paises;', 'postgres', 'admin', [
                PDO::ATTR_EMULATE_PREPARES => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
            ]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . " en la línea: " . $e->getLine();
        }
    }

    public static function getInstance(): Conexion
    {
        if (is_null(self::$instance)) {
            self::$instance = new Conexion();
        }

        return self::$instance;
    }
}