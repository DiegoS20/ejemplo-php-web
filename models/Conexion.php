<?php
class Conexion
{
    private static $instance;
    private function __construct()
    {
    }

    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=ejemplo-web', 'root', '', [
                    PDO::ATTR_EMULATE_PREPARES => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                ]);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage() . " en la línea: " . $e->getLine();
            }
        }

        return self::$instance;
    }
}