<?php

class UserRepository extends Repository
{
    protected static string $table = 'users';
    protected static string $primaryKey = 'id';

    public function getByEmail(string $email): false|object
    {
        if (empty(static::$table)) {
            throw new Exception('Table is empty');
        }

        $sql = $this->builder->select(static::$table)->where('email', $email)->getSQL();
        $connector = $this->connector;
        $stmt = $connector->prepare($sql);
        $stmt->execute($this->builder->getValues());

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}