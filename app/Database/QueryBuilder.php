<?php

namespace App\Database;
class QueryBuilder
{
    private static \PDO $pdo;

    public static function make(\PDO $pdo): void
    {
        self::$pdo = $pdo;
    }

    public static function get(string $table): bool|array
    {
        $query = self::$pdo->prepare("SELECT * FROM $table");
        $query->execute();

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function insert(string $table, array $data): void
    {
        $columns = self::adjustData($data, '?');

        $query = self::$pdo->prepare("INSERT INTO {$table} ({$columns['fieldsStr']}) VALUES({$columns['values']})");
        $query->execute(array_values($data));
    }

    public static function update(string $table, $id, array $data): void
    {
        $columns = self::adjustData($data, '=?');

        $query = self::$pdo->prepare("UPDATE $table SET {$columns['fieldsStr']} WHERE id = ?");
        $query->execute(array_merge(array_values($data), [$id]));
    }

    public static function delete(string $table, int $id): void
    {
        $query = self::$pdo->prepare('SELECT * FROM {$table} WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    /**
     * @param array|null $data
     * @param string $symbol
     * @return array|null
     */
    public static function adjustData(?array $data, string $symbol): array|null
    {
        $columnsAndValues = [];
        if (!$data) {
            return null;
        }

        $columnsAndValues['fields'] = array_keys($data);
        $columnsAndValues['fieldsStr'] = ($symbol === '=?') ?
            implode('=?,', $columnsAndValues['fields']) . '=?' :
            implode(',', $columnsAndValues['fields']);

        $columnsAndValues['values'] = str_repeat($symbol . ',', count($columnsAndValues['fields']) - 1) . $symbol;

        return $columnsAndValues;
    }


}