<?php

namespace App\Model;

use App\Database\QueryBuilder;

class Tasks
{
    private const TABLE = 'tasks';

    /**
     * @return array
     */
    public static function getAll(): array
    {
        return QueryBuilder::get(self::TABLE);
    }

    /**
     * @param $data
     * @return void
     */
    public static function create($data): void
    {
        QueryBuilder::insert(self::TABLE, $data);
    }

    /**
     * @param array $data
     * @param int $id
     * @return void
     */
    public static function update(array $data, int $id): void
    {
        QueryBuilder::update(self::TABLE, $id, $data);
    }

    /**
     * @param int $id
     * @return void
     */
    public static function delete(int $id): void
    {
        QueryBuilder::delete(self::TABLE, $id);
    }

}