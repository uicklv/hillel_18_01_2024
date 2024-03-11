<?php

class Repository
{
    protected static string $table = '';

    protected static string $primaryKey = 'id';

    public function __construct(
        protected PDO $connector,
        protected SQLQueryBuilder $builder)
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

    public function create(array $data): bool
    {
        $sql = $this->builder->insert(static::$table, $data)->getSQL();
        $connector = $this->connector;
        $stmt = $connector->prepare($sql);

        return $stmt->execute($this->builder->getValues());
    }
}