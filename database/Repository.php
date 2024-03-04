<?php

class Repository
{
    protected static string $table = '';

    protected static string $primaryKey = 'id';

    public function __construct(
        private PDO $connector,
        private SQLQueryBuilder $builder)
    {}

    public function find(int|string $id): false|object
    {
        if (empty(static::$table)) {
            throw new Exception('Table is empty');
        }

        $sql = $this->builder->select(static::$table)->where(static::$primaryKey, $id)->getSQL();
        $connector = $this->connector;
        $stmt = $connector->prepare($sql);
        $stmt->execute($this->builder->getValues());

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}