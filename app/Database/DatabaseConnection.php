<?php

namespace App\Database;

use PDO;

class DatabaseConnection
{
    private static \PDO $pdo;

    /**
     * @return PDO|void
     */
    public static function connection(array $config)
    {
        try {
            self::$pdo = new \PDO(
                "mysql:host={$config['host']};dbname={$config['dbName']};charset=utf8mb4",
                $config['username'],
                $config['password']);

            return self::$pdo;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}