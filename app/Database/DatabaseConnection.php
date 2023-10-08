<?php

namespace App\Database;

use PDO;

class DatabaseConnection
{
    private static \PDO $pdo;

    /**
     * @return PDO|void
     */
    public static function connection()
    {
        try {
            self::$pdo = new \PDO('mysql:host=localhost;dbname=todolist;charset=utf8mb4', 'root', '');

            return self::$pdo;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}